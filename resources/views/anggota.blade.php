@extends('layouts.main')

@section('container')
    <div class="container-fluid anggota text-dark bg-white">
        <div class="background">
            <div class="row">
                <div class="col-md-3 offset-md-1">
                    <img src="img/anggota.jpg" alt="Anggota" class="rounded-circle" width="160" height="170">
                </div>
                <div class="col-md-5">
                    <h1>M. Gusti Arya Priandana</h1>
                    <h5>Ketua Umum & Anggota Bidang PHBI</h5>
                </div>
                <div class="col-md-2">
                    <a href="https://instagram.com/irma_alikhlas2" target="_blank" class="d-block">
                        <i class="fab fa-instagram text-white fs-2 ms-1 me-4 mb-3"><span class="ms-4 text-dark fs-3 fw-bold">gusarya31</span></i>     
                    </a>    
                    <a href="https://instagram.com/irma_alikhlas2" target="_blank" class="d-block">
                        <i class="fab fa-facebook text-white fs-2 me-4"><span class="ms-4 text-dark fs-4 fw-bold">082281963857</span></i>
                    </a>
                </div>
            </div>
            <div class="motivate rounded-4 text-white text-center position-relative">
                “Mencari kesuksesan itu dengan berusaha dan berdo’a tanpa putus asa”
            </div>
        </div>
        
        <aside class="row">
            <div class="col-md-4 offset-md-1 biodata pt-4">
                <p>Usia : 20 tahun</p>
                <p>Jenis Kelamin : Laki-laki</p>
                <p>Hobi : Catur</p>
            </div>
            <div class="col-md-5">
                <h3 class="position-relative">Untuk IRMA Al-Ikhlas</h3>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         Pendapat Tentang IRMA
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Pesan Untuk Seluruh Anggota IRMA
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Harapan Untuk IRMA Kedepannya
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </aside>
    </div>
@endsection