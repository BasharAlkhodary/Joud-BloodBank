@extends('layouts.app')

@section('title', 'Messages | Blood Bank')

@section('content')

<nav id="header-navbar" class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center text-white" href="indexbank.html">
            <h3 class="font-weight-bolder mb-0" style="font-family: cursive">JOUD BLOOD</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bloodbank.dashboard') }}">Home</a>
                </li>         
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link d-flex align-items-center text-white">
                            <i class="bi bi-box-arrow-right mr-2"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="side-search" class="sidenav">
    <a href="javascript:void(0)" id="side-search-close">&times;</a>
    <div class="sidenav-content"></div>
</div>

<div class="jumbotron d-flex align-items-center">
    <div class="container text-center">
        <h1 class="display-1 mb-4" style="font-family: cursive">Complaints and suggestions</h1>
    </div>
    <div class="rectangle-1"></div>
    <div class="rectangle-2"></div>
    <div class="rectangle-transparent-1"></div>
    <div class="rectangle-transparent-2"></div>
    @for($i=1;$i<=6;$i++)
    <div class="triangle triangle-{{ $i }}">
        <img src="{{ asset('img/obj_triangle.png')}}" alt="">
    </div>
    @endfor
</div>

<div class="container mt-5">
    <h2 style="font-family: cursive">Received Messages</h2>

    {{-- بحث --}}
    <div class="row mb-3">
        <div class="col-md-6">
            <input type="text" name="search" id="search-input" class="form-control" placeholder="Search by name or email" value="{{ request('search') }}">
        </div>
    </div>

    {{-- الرسائل + Pagination --}}
    <div id="messages-list">
        <div class="list-group">
            @foreach ($messages as $msg)
            <div class="list-group-item mb-2 {{ $msg->status == 'new' ? 'bg-light border-primary' : '' }}" id="message-{{ $msg->id }}">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>{{ $msg->name }} <small class="text-muted">{{ $msg->email }}</small></h5>
                    <small>{{ $msg->phoneNumber }}</small>
                    <small>{{ $msg->created_at->format('d-m-Y H:i') }}</small>
                </div>
                <p>{{ $msg->message }}</p>
                <div>
                    @if($msg->status == 'new')
                    <button class="btn btn-sm btn-info mark-read-btn" data-url="{{ route('messages.markRead', $msg->id) }}">Mark as Read</button>
                    @endif
                    <button class="btn btn-sm btn-danger delete-btn" data-url="{{ route('messages.destroy', $msg->id) }}">Delete</button>
                </div>
            </div>
            <br>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4" id="messages-pagination">
            {!! $messages->links() !!}
        </div>
    </div>
</div>

{{-- مكتبة SweetAlert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
// تحميل الرسائل عبر AJAX
function loadMessages(page = 1) {
    let search = document.getElementById('search-input').value;

    fetch(`/bloodBank/messages?page=${page}&search=${encodeURIComponent(search)}`)
        .then(res => res.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            const newMessages = doc.querySelector('#messages-list');
            if(newMessages){
                document.querySelector('#messages-list').innerHTML = newMessages.innerHTML;
            }

            attachPagination();
            attachButtons();
        });
}

// ربط Pagination
function attachPagination() {
    document.querySelectorAll('#messages-pagination a').forEach(link => {
        link.addEventListener('click', function(e){
            e.preventDefault();
            const url = new URL(this.href);
            const page = url.searchParams.get('page');
            loadMessages(page);
        });
    });
}

// أزرار Mark as Read و Delete
function attachButtons() {
    document.querySelectorAll('.mark-read-btn').forEach(btn => {
        btn.addEventListener('click', function(){
            let url = this.dataset.url;
            fetch(url, {
                method: 'POST',
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept':'application/json' }
            })
            .then(res => res.json())
            .then(data => {
                if(data.success){
                    let div = this.closest('.list-group-item');
                    div.classList.remove('bg-light', 'border-primary');
                    this.remove();
                }
            });
        });
    });

    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function(){
            let url = this.dataset.url;
            Swal.fire({
                title: 'Are you sure?',
                text: "This message will be permanently deleted!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch(url, {
                        method: 'DELETE',
                        headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept':'application/json' }
                    })
                    .then(res => res.json())
                    .then(data => {
                        if(data.success){
                            Swal.fire(
                                'Deleted!',
                                'The message has been deleted.',
                                'success'
                            );
                            btn.closest('.list-group-item').remove();
                        }
                    });
                }
            });
        });
    });
}

// البحث مباشرة عند كتابة كلمة
document.getElementById('search-input').addEventListener('keyup', function(){
    loadMessages(1);
});

// تفعيل عند تحميل الصفحة
document.addEventListener('DOMContentLoaded', function(){
    attachPagination();
    attachButtons();
});
</script>

@endsection
