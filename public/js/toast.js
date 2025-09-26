document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const alertBox = document.getElementById('formAlert');

    // لو ما فيه فورم أو alert، اطلع من السكربت
    if (!form || !alertBox) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const inputs = form.querySelectorAll('input, select');
        let valid = true;

        inputs.forEach(input => {
            if (!input.value.trim()) valid = false;
        });

        // التحقق من الحقول الخاصة، إذا موجودة فقط
        const idInput = document.getElementById('identityNumber');
        if (idInput) {
            const idPattern = /^[0-9]{9}$/;
            if (!idPattern.test(idInput.value.trim())) {
                valid = false;
                idInput.classList.add('is-invalid');
            } else {
                idInput.classList.remove('is-invalid');
            }
        }

        const phoneInput = document.getElementById('phoneNumber');
        if (phoneInput) {
            const phonePattern = /^(059|056)[0-9]{7}$/;
            if (!phonePattern.test(phoneInput.value.trim())) {
                valid = false;
                phoneInput.classList.add('is-invalid');
            } else {
                phoneInput.classList.remove('is-invalid');
            }
        }

        const emailInput = document.getElementById('email');
        if (emailInput) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailInput.value.trim())) {
                valid = false;
                emailInput.classList.add('is-invalid');
            } else {
                emailInput.classList.remove('is-invalid');
            }
        }

        // عرض رسالة التنبيه
        alertBox.classList.remove('d-none', 'alert-success', 'alert-danger', 'fade-out');
        alertBox.classList.add(valid ? 'alert-success' : 'alert-danger');
        alertBox.textContent = valid ? 'تم التسجيل بنجاح!' : 'يرجى التأكد من تعبئة البيانات بشكل صحيح!';
        alertBox.classList.add('fade-in');

        setTimeout(() => {
            alertBox.classList.remove('fade-in');
            alertBox.classList.add('fade-out');
            setTimeout(() => {
                alertBox.classList.add('d-none');
            }, 500);
        }, 3000);
    });
});
