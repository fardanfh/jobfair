@extends('layouts.landing_page.layout')

@section('content')

<section class="hero d-flex justify-content-center align-items-center p-3">
    <div class="card" style="width: 25rem">
        <div class="card-body">
            <h4 class="text-center text-muted">Cari Pekerjaan Mu</h4>

            <form action="" class="mt-3">
                <div class="mb-3">
                    <label for="jobtitle" class="form-label text-muted">Pekerjaan / Perushaan</label>
                    <input type="text" class="form-control" id="jobtitle" placeholder="Posisi atau Perushaan">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Semua Lokasi</option>
                        <option value="1">Kab Bandung</option>
                        <option value="2">Kota Bandung</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="button">Cari</button>
            </form>
        </div>
    </div>
</section>

<section class="container">
    <h2 class="text-center mt-5">Kategori Pekerjaan</h2>

    <div class="mt-5 row">
        <div class="col-md-4 mb-3">
            <div class="card p-2 shadow-sm">
                <div class="d-flex align-items-center">
                    <div class="icon-container bg-primary text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0m6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0"/>
                          </svg>
                    </div>
                    <div class="ms-2 fw-semibold">
                        <p class="m-0">Development</p>
                        <p class="m-0 text-muted">2000 Jobs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card p-2 shadow-sm">
                <div class="d-flex align-items-center">
                    <div class="icon-container bg-primary text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z"/>
                          </svg>
                    </div>
                    <div class="ms-2 fw-semibold">
                        <p class="m-0">Designer</p>
                        <p class="m-0 text-muted">1000 Jobs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card p-2 shadow-sm">
                <div class="d-flex align-items-center">
                    <div class="icon-container bg-primary text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calculator-fill" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm2 .5v2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0-.5.5m0 4v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M4.5 9a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM4 12.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5M7.5 6a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM7 9.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m.5 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM10 6.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5m.5 2.5a.5.5 0 0 0-.5.5v4a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5z"/>
                          </svg>
                    </div>
                    <div class="ms-2 fw-semibold">
                        <p class="m-0">Guru</p>
                        <p class="m-0 text-muted">1000 Jobs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card p-2 shadow-sm">
                <div class="d-flex align-items-center">
                    <div class="icon-container bg-primary text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                          </svg>
                    </div>
                    <div class="ms-2 fw-semibold">
                        <p class="m-0">Marketing</p>
                        <p class="m-0 text-muted">2000 Jobs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card p-2 shadow-sm">
                <div class="d-flex align-items-center">
                    <div class="icon-container bg-primary text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
                            <path d="M0 5a5 5 0 0 0 4.027 4.905 6.5 6.5 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05q-.001-.07.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.5 3.5 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98q-.004.07-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5m16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0m-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674z"/>
                          </svg>
                    </div>
                    <div class="ms-2 fw-semibold">
                        <p class="m-0">Finance</p>
                        <p class="m-0 text-muted">2000 Jobs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card p-2 shadow-sm">
                <div class="d-flex align-items-center">
                    <div class="icon-container bg-primary text-white text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list-ol" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5"/>
                            <path d="M1.713 11.865v-.474H2c.217 0 .363-.137.363-.317 0-.185-.158-.31-.361-.31-.223 0-.367.152-.373.31h-.59c.016-.467.373-.787.986-.787.588-.002.954.291.957.703a.595.595 0 0 1-.492.594v.033a.615.615 0 0 1 .569.631c.003.533-.502.8-1.051.8-.656 0-1-.37-1.008-.794h.582c.008.178.186.306.422.309.254 0 .424-.145.422-.35-.002-.195-.155-.348-.414-.348h-.3zm-.004-4.699h-.604v-.035c0-.408.295-.844.958-.844.583 0 .96.326.96.756 0 .389-.257.617-.476.848l-.537.572v.03h1.054V9H1.143v-.395l.957-.99c.138-.142.293-.304.293-.508 0-.18-.147-.32-.342-.32a.33.33 0 0 0-.342.338zM2.564 5h-.635V2.924h-.031l-.598.42v-.567l.629-.443h.635z"/>
                        </svg>
                    </div>
                    <div class="ms-2 fw-semibold">
                        <p class="m-0">Dan yang lainya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container">
    <h2 class="text-center mt-5">Mencari pekerjaan / kandidat dengan mudah</h2>

    <div class="row mt-5">
        <div class="col-md-6">
            <a href="" class="text-decoration-none">
                <div class="card" style="height: 10rem">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="title" style="width: 80%">
                            <h3>Saya Mencari Pekerjaan</h3>
                            <p>Cari loker yang pas untuk mu!. Dan buat resume gratis untuk undangan wawancara.</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                          </svg>
                    </div>
                </div>
            </a>
            <ol class="list-group list-group-numbered mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Resume Online</div>
                        Buat Resume anda sebaik mungkin.
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Lowongan Rekomendasi</div>
                        Lowongan direkomendasikan oleh data diri anda.
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Pantau Status Lamaran</div>
                        Kamu bisa memantau status lamaran mu.
                    </div>
                </li>
            </ol>
        </div>
        <div class="col-md-6">
            <a href="" class="text-decoration-none">
                <div class="card" style="height: 10rem">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div class="title" style="width: 80%">
                            <h3>Saya Mencari Kandidat</h3>
                            <p>Temukan kandidat yang berkualitas untuk berkerja.</p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                          </svg>
                    </div>
                </div>
            </a>
            <ol class="list-group list-group-numbered mt-3">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Memposting Pekerjaan</div>
                        Untuk mencari kandidat yang berkualitas.
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Proses Gampang mencari kandidat</div>
                        Proses akan dibantu dengan sistem untuk mencari kandidat yang sesuai.
                    </div>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">Kandidat aman dan terpercaya</div>
                        Menawarkan kandidat dari anak SMK TI.
                    </div>
                </li>
            </ol>
        </div>
    </div>
</section>

<section class="container">
    <h2 class="text-center mt-5">Lowongan Premium</h2>

    <div class="row mt-5">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="company d-flex align-items-center">
                        <div class="company-image border rounded overflow-hidden">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/1042/2024/02/17/PT-Indofood-Sukses-Makmur-Tbk-2430014277.jpg" alt="" width="100" height="100">
                        </div>
                        <div class="company-title ms-2">
                            <p class="m-0">PT. Indofood</p>
                            <p class="m-0 text-muted">2 hari yang lalu</p>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="m-0 job-position">Junior Programmer</p>
                        <p class="m-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                              </svg>    
                        Kota Bandung</p>
                    </div>

                    <div class="mt-3">
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
                              </svg>
                            10jt - 20jt
                        </span>
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                              </svg>
                            Full Time
                        </span>
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                              </svg>s
                            SMA/SMK/S1
                        </span>
                    </div>

                    <div class="mt-3 d-flex justify-content-between">
                        <a href="" class="btn btn-primary">Lihat Detail</a>
                        <button class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                              </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="company d-flex align-items-center">
                        <div class="company-image border rounded overflow-hidden">
                            <img src="https://www.bca.co.id/-/media/Feature/Card/List-Card/Tentang-BCA/Brand-Assets/Logo-BCA/Logo-BCA_Biru.png" alt="" width="100" height="100">
                        </div>
                        <div class="company-title ms-2">
                            <p class="m-0">PT. BCA</p>
                            <p class="m-0 text-muted">1 hari yang lalu</p>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="m-0 job-position">Finance</p>
                        <p class="m-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                              </svg>    
                        Kota Bandung</p>
                    </div>

                    <div class="mt-3">
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
                              </svg>
                            10jt - 20jt
                        </span>
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                              </svg>
                            Full Time
                        </span>
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                              </svg>s
                            SMA/SMK/S1
                        </span>
                    </div>

                    <div class="mt-3 d-flex justify-content-between">
                        <a href="" class="btn btn-primary">Lihat Detail</a>
                        <button class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                              </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="company d-flex align-items-center">
                        <div class="company-image border rounded overflow-hidden">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/1042/2024/02/17/PT-Indofood-Sukses-Makmur-Tbk-2430014277.jpg" alt="" width="100" height="100">
                        </div>
                        <div class="company-title ms-2">
                            <p class="m-0">PT. Indofood</p>
                            <p class="m-0 text-muted">2 hari yang lalu</p>
                        </div>
                    </div>

                    <div class="mt-3">
                        <p class="m-0 job-position">Junior Programmer</p>
                        <p class="m-0 text-muted">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                              </svg>    
                        Kota Bandung</p>
                    </div>

                    <div class="mt-3">
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                                <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                                <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z"/>
                              </svg>
                            10jt - 20jt
                        </span>
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5"/>
                                <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z"/>
                              </svg>
                            Full Time
                        </span>
                        <span class="badge text-bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard-fill" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917z"/>
                                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466z"/>
                              </svg>s
                            SMA/SMK/S1
                        </span>
                    </div>

                    <div class="mt-3 d-flex justify-content-between">
                        <a href="" class="btn btn-primary">Lihat Detail</a>
                        <button class="btn btn-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                              </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center mb-5">
        <button class="btn btn-primary">Lihat Semua</button>
    </div>
</section>

<footer
    class="text-center text-lg-start text-white"
    style="background-color: #1c2331"
    >
    <section
        class="d-flex justify-content-between p-4"
        style="background-color: #6351ce"
        >
    <div class="me-5">
        <span>Get connected with us on social networks:</span>
    </div>
    <div>
        <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
        </a>
    </div>
    </section>

    <section class="">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">SMK TI GNC.</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                    />
                    <p>
                        MK-TI Garuda Nusantara merupakan salah satu sekolah terbesar di Kota Cimahi. Menjuarai berbagai event baik tingkat Kota, Provinsi maupun Nasional. Setiap tahun menerima lebih dari 600 siswa baru.
                        Dan telah meluluskan ribuan siswa sejak berdiri tahun 2009.
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Products</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p>
                        <a href="#!" class="text-white">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!" class="text-white">Bootstrap Angular</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold">Useful links</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p>
                        Photo by <a href="https://unsplash.com/@marvelous?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Marvin Meyer</a> on <a href="https://unsplash.com/photos/people-sitting-down-near-table-with-assorted-laptop-computers-SYTO3xs06fU?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>
                    </p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #7c4dff; height: 2px"
                        />
                    <p><i class="fas fa-home mr-3"></i> Jl. Sangkuriang No.30, Cipageran, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40511</p>
                    <p><i class="fas fa-envelope mr-3"></i> informasi@smktignc.sch.id</p>
                    <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
            </div>
        </div>
    </section>
    <div
        class="text-center p-3"
        style="background-color: rgba(0, 0, 0, 0.2)"
        >
    © 2024 Copyright:
    <a class="text-white" href="https://www.smktignc.sch.id/" target="_blank">SMK TI Cimahi</a>
    </div>
</footer>


   {{-- <a href="https://www.freepik.com/free-vector/hand-drawn-business-people-illustration_15635336.htm#fromView=keyword&page=1&position=2&uuid=d77d26ce-de52-4980-a589-d68e100f99d7">Image by pikisuperstar on Freepik</a> --}}

   {{-- <a href="https://www.freepik.com/free-vector/organic-flat-people-business-training-illustration_13297951.htm#fromView=keyword&page=1&position=4&uuid=d77d26ce-de52-4980-a589-d68e100f99d7">Image by pikisuperstar on Freepik</a> --}}
@endsection
