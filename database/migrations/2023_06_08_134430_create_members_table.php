<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bidang_id')->constrained('bidangs')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->string('jabatan');
            $table->text('alamat');
            $table->string('no_hp')->unique();
            $table->string('intagram');
            $table->string('hobi');
            $table->text('motivasi');
            $table->string('foto_anggota')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};