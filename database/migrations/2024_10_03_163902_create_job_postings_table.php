<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('jabatan'); // Jabatan / Posisi Pekerjaan
            $table->text('deskripsi')->nullable(); // Deskripsi Pekerjaan
            $table->text('tanggung_jawab'); // Tanggung Jawab Pekerjaan
            $table->text('keahlian'); // Keahlian
            $table->text('kualifikasi'); // Kualifikasi

            // Pendidikan (multiple options as JSON)
            $table->json('pendidikan');

            // Pengalaman (multiple options as JSON)
            $table->json('pengalaman');

            // Level Posisi Pekerjaan
            $table->enum('level_posisi', ['Junior', 'Middle', 'Senior']);

            // Tipe Pekerjaan
            $table->enum('tipe_pekerjaan', ['Full-Time', 'Part-Time', 'Contract']);

            // Gaji
            $table->enum('gaji', [
                'negosiasi', '1-2jt', '2-3jt', '3-4jt', '5-5jt', '5-6jt', '6-7jt',
                '7-8jt', '8-9jt', '9-10jt', '10-12jt', '12-15jt', '15-20jt', '20jt'
            ]);

            // Lokasi Pekerjaan
            $table->string('lokasi'); // Can be expanded to another table if needed

            // Waktu Bekerja
            $table->string('waktu_bekerja')->nullable(); // Optional

            // Tunjangan dan Insentif (optional fields)
            $table->boolean('is_tunjangan')->default(false);
            $table->text('tunjangan')->nullable();
            $table->text('insentif')->nullable();

            // Kerja Jarak Jauh (Remote jobs)
            $table->boolean('is_remote')->default(false);

            // Pertanyaan ke Kandidat (multiple questions as JSON)
            $table->json('pertanyaan_kandidat')->nullable();

            // Status (e.g., Active or Inactive)
            $table->enum('status', ['active', 'inactive'])->default('active');

            // Tanggal Berakhir
            $table->date('tanggal_berakhir')->nullable(); // Optional end date

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
        Schema::dropIfExists('job_postings');
    }
}
