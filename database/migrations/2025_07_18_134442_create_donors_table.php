    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('donors', function (Blueprint $table) {
                $table->id();
                $table->string('identity_number')->unique();
                $table->string('phone_number')->unique();
                $table->enum('gender', ['male', 'female']);
                $table->enum('blood_type', ['A+', 'A-','B+','B-','AB+','AB-','O+','O-'])->nullable(); //سيتم تحديدها من قبل بنك الدم
                $table->foreignId('blood_bank_id')->nullable()->constrained('users')->onDelete('cascade');
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->string('address');
                $table->date('birth_date');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('donors');
        }
    };
