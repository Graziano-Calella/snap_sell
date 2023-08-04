<x-layout>
    
    {{-- <section class="container my-5 mt-5 pt-5 pb-5 bg-image">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="h1-viste">Chi siamo</h1>
            </div>
        </div>
    </section> --}}
    
    <section class="container-fluid min-vh-100 bg-chiSiamo">
        <div class="row vh-100">
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <div class="circle">
                    <div class="opener">
                        <i class="fa-solid fa-plus fa-3x"></i>
                    </div>   
                </div>
    
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <div id="div-sovrapposto" class="position-absolute">
                    <div class="container-header">
                        <div class="content-header watch transition">
                          <h2 class="h2-chiSiamo">Clicca qui per scoprire di più</h2>
                          <i class="fa-solid fa-arrow-left fa-5x" style="color: #00afb9;"></i>
                        </div>
                      </div>
                </div>
                <div class="programmers-card d-none" id="transparent">
                    <div class="inner">
                        <div class="inner-face position-relative"></div>
                        <div class="inner-back container-fluid p-0">
                            <div class="row h-100 ">
                                <div class="col-12 d-flex flex-column justify-content-around align-items-center">
                                    <img src="/img/logo4.png" class="custom" alt="">
                                    <p class="nome-card" id="programmer-name"></p>
                                    <p class="description-card" id="programmer-description"></p>
                                    <a id="programmer-linkedin" target="blank" href=""><i class="fa-brands fa-3x fa-linkedin" style="color: #00afb9;"></i></a>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>





</x-layout>