@extends('dashboard.layout')

@section('createjob')
    <form>
        <!-- Jabatan / Posisi Pekerjaan -->
        <div class="form-group">
            <label for="jabatan" class="font-weight-bold">Jabatan / Posisi Pekerjaan <span
                    class="text-danger">*</span></label>
            <input type="text" class="form-control" id="jabatan" placeholder="Contoh : Staff Accounting" required>
        </div>

        <!-- Deskripsi Pekerjaan -->
        <div class="form-group">
            <label for="deskripsi" class="font-weight-bold">Deskripsi Pekerjaan</label>
            <textarea class="form-control" id="deskripsi" rows="4"
                placeholder="Contoh : CV. Jemari perusahaan bergerak di bidang teknologi membutuhkan beberapa staff keuangan yang akan bertugas mengurus aktifitas perpajakan, accounting, dan finance perusahaan"></textarea>
        </div>

        <!-- Tanggung Jawab Pekerjaan -->
        <div class="form-group">
            <label for="tanggungJawab" class="font-weight-bold">Tanggung Jawab Pekerjaan <span
                    class="text-danger">*</span></label>
            <textarea class="form-control" id="tanggungJawab" rows="3"
                placeholder="Contoh : Menyusun laporan keuangan, pelaporan pajak, Membuat invoice" required></textarea>
        </div>

        <!-- Keahlian -->
        <div class="form-group">
            <label for="keahlian" class="font-weight-bold">Keahlian <span class="text-danger">*</span></label>
            <textarea class="form-control" id="keahlian" rows="3"
                placeholder="Contoh : Menguasai Sistem ERP, Menguasai Microsoft Office" required></textarea>
        </div>

        <!-- Kualifikasi -->
        <div class="form-group">
            <label for="kualifikasi" class="font-weight-bold">Kualifikasi <span class="text-danger">*</span></label>
            <textarea class="form-control" id="kualifikasi" rows="3"
                placeholder="Contoh : Pria, tidak merokok, Pengalaman minimal 1 tahun dibidang yang sama (Freshgraduate silahkan melamar)"
                required></textarea>
        </div>

        <!-- Syarat Pendidikan -->
        <div class="form-group">
            <label for="pendidikan" class="font-weight-bold">Syarat Pendidikan <span class="text-danger">*</span></label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="diploma" name="pendidikan" value="Diploma">
                <label class="form-check-label" for="diploma">Diploma/D1/D2/D3</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="doctor" name="pendidikan" value="Doctor">
                <label class="form-check-label" for="doctor">Doctor / S3</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="master" name="pendidikan" value="Master">
                <label class="form-check-label" for="master">Master / S2</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="sarjana" name="pendidikan" value="Sarjana">
                <label class="form-check-label" for="sarjana">Sarjana / S1</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="sma" name="pendidikan" value="SMA">
                <label class="form-check-label" for="sma">SMA / SMK / STM</label>
            </div>
        </div>

        <!-- Syarat Pengalaman -->
        <div class="form-group">
            <label for="pengalaman" class="font-weight-bold">Syarat Pengalaman <span class="text-danger">*</span></label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="1-2tahun" name="pengalaman" value="1-2 Tahun">
                <label class="form-check-label" for="1-2tahun">1-2 Tahun</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="3-5tahun" name="pengalaman" value="3-5 Tahun">
                <label class="form-check-label" for="3-5tahun">3-5 Tahun</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="6-10tahun" name="pengalaman" value="6-10 Tahun">
                <label class="form-check-label" for="6-10tahun">6-10 Tahun</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="lebih10tahun" name="pengalaman"
                    value="Lebih dari 10 Tahun">
                <label class="form-check-label" for="lebih10tahun">Lebih dari 10 Tahun</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="freshgraduate" name="pengalaman"
                    value="Fresh Graduate">
                <label class="form-check-label" for="freshgraduate">Fresh Graduate</label>
            </div>
        </div>

        <!-- Level Posisi Pekerjaan -->
        <div class="form-group">
            <label for="levelPosisi" class="font-weight-bold">Level Posisi Pekerjaan <span
                    class="text-danger">*</span></label>
            <select class="form-control" id="levelPosisi" required>
                <option value="" disabled selected>Select</option>
                <option value="Junior">Junior</option>
                <option value="Middle">Middle</option>
                <option value="Senior">Senior</option>
            </select>
        </div>

        <!-- Tipe Pekerjaan -->
        <div class="form-group">
            <label for="tipePekerjaan" class="font-weight-bold">Tipe Pekerjaan <span class="text-danger">*</span></label>
            <select class="form-control" id="tipePekerjaan" required>
                <option value="" disabled selected>Select</option>
                <option value="Full-Time">Full-Time</option>
                <option value="Part-Time">Part-Time</option>
                <option value="Contract">Contract</option>
            </select>
        </div>

        <!-- Gaji -->
        <div class="form-group">
            <label for="gaji" class="font-weight-bold">Gaji <span class="text-danger">*</span></label>
            <select class="form-control" id="gaji" required>
                <option value="" disabled selected>Select</option>
                <option value="negosiasi">Negosiasi</option>
                <option value="1-2jt">Rp 1-2 juta</option>
                <option value="2-3jt">Rp 2-3 juta</option>
                <option value="3-4jt">Rp 3-4 juta</option>
                <option value="5-5jt">Rp 4-5 juta</option>
                <option value="5-6jt">Rp 5-6 juta</option>
                <option value="6-7jt">Rp 6-7 juta</option>
                <option value="7-8jt">Rp 7-8 juta</option>
                <option value="8-9jt">Rp 8-9 juta</option>
                <option value="9-10jt">Rp 9-10 juta</option>
                <option value="10-12jt">Rp 10-12 juta</option>
                <option value="12-15jt">Rp 12-15 juta</option>
                <option value="15-20jt">Rp 15-20 juta</option>
                <option value="20jt">Rp 20 juta lebih</option>
            </select>
        </div>

        <!-- Lokasi Pekerjaan -->
        <div class="form-group">
            <label for="lokasi" class="font-weight-bold">Lokasi Pekerjaan <span class="text-danger">*</span></label>
            <select class="form-control" id="lokasi" required>
                <option value="" disabled selected>Select</option>
                <option value="Aceh">Aceh</option>
                <option value="Aceh Tamiang">Aceh Tamiang</option>
                <!-- Tambahkan lokasi lainnya di sini -->
            </select>
        </div>

        <!-- Waktu Bekerja -->
        <div class="form-group">
            <label for="waktuBekerja" class="font-weight-bold">Waktu Bekerja</label>
            <input type="text" class="form-control" id="waktuBekerja"
                placeholder="Contoh: Senin - Jumat, 08:00 - 17:00 WIB">
        </div>

        <!-- CheckBox Tunjangan dan Insentif -->
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="optionalField">
            <label class="form-check-label" for="optionalField">Opsional, diisi jika ada</label>
        </div>

        <!-- Tunjangan -->
        <div id="tunjangan" class="form-group" style="display: none;">
            <label for="tunjanganInput" class="font-weight-bold">Tunjangan</label>
            <input type="text" class="form-control" id="tunjanganInput"
                placeholder="Contoh: BPJS Kesehatan, BPJS Ketenagakerjaan">
        </div>

        <!-- Insentif -->
        <div id="insentif" class="form-group" style="display: none;">
            <label for="insentifInput" class="font-weight-bold">Insentif</label>
            <input type="text" class="form-control" id="insentifInput"
                placeholder="Contoh: Bonus tahunan, Tunjangan transportasi">
        </div>

        <!-- Kerja Jarak Jauh (Remote jobs) -->
        <div class="form-group">
            <label for="remoteJobs" class="font-weight-bold">Kerja Jarak Jauh (Remote jobs)</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remoteJobs" name="remoteJobs" value="Remote jobs">
                <label class="form-check-label" for="remoteJobs">Centang jika pekerjaan ini dikerjakan secara jarak jauh
                    (remote jobs)</label>
            </div>
        </div>

        <!-- Pertanyaan Ke Kandidat -->
        <div class="form-group">
            <label for="pertanyaanKandidat" class="font-weight-bold">Pertanyaan Ke Kandidat</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="pertanyaan1" name="pertanyaanKandidat"
                    value="Gaji">
                <label class="form-check-label" for="pertanyaan1">Berapa gaji bulanan yang kamu inginkan?</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="pertanyaan2" name="pertanyaanKandidat"
                    value="Bekerja">
                <label class="form-check-label" for="pertanyaan2">Apakah kamu bersedia bepergian untuk pekerjaan ini saat
                    dibutuhkan?</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="pertanyaan3" name="pertanyaanKandidat"
                    value="Luar Jam Kerja">
                <label class="form-check-label" for="pertanyaan3">Apakah kamu bersedia bekerja di luar jam kerja biasa
                    saat dibutuhkan? (cth. akhir pekan, malam hari, hari libur nasional)</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="pertanyaan4" name="pertanyaanKandidat"
                    value="Microsoft Office">
                <label class="form-check-label" for="pertanyaan4">Produk Microsoft Office apa saja yang bisa kamu
                    gunakan?</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="pertanyaan5" name="pertanyaanKandidat"
                    value="Bahasa">
                <label class="form-check-label" for="pertanyaan5">Bahasa apa saja yang fasih kamu gunakan?</label>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="pertanyaan6" name="pertanyaanKandidat"
                    value="Waktu untuk berpindah">
                <label class="form-check-label" for="pertanyaan6">Berapa lama waktu yang kamu butuhkan untuk memberi tahu
                    perusahaanmu saat ini?</label>
            </div>
        </div>

        {{-- <!-- Job Posting Premium -->
        <div class="form-group">
            <label for="jobPostingPremium" class="font-weight-bold">Job Posting Premium</label>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="jobPostingPremium" name="jobPostingPremium"
                    value="Job Posting Premium">
                <label class="form-check-label" for="jobPostingPremium">Khusus member yang memiliki quota "Job Posting
                    Premium", jadikan iklan anda premium dan dapatkan calon kandidat 10x lebih banyak, iklan anda akan
                    tampil di laman headline, diutamakan di laman pencarian dan kategori terkait dengan highlight
                    warna.</label>
            </div>
        </div> --}}

        <!-- Submit Button dengan lebar khusus -->
        <button type="submit" class="btn btn-primary btn-sm" style="width: 100px;">KIRIM</button>
    </form>
@endsection

@section('scripts')
    <script>
        document.getElementById('optionalField').addEventListener('change', function() {
            var tunjanganField = document.getElementById('tunjangan');
            var insentifField = document.getElementById('insentif');
            if (this.checked) {
                tunjanganField.style.display = 'block';
                insentifField.style.display = 'block';
            } else {
                tunjanganField.style.display = 'none';
                insentifField.style.display = 'none';
            }
        });
    </script>
@endsection
