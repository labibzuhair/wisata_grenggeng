        {{-- pop up detail produk --}}
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detail Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section class="black">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="card text-black">
                                        <div id="productModalCarousel" class="carousel slide modal-carousel"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <!-- Images will be inserted here dynamically -->
                                            </div>
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#productModalCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#productModalCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="text-center">
                                                <h5 class="card-title" id="productName"></h5>
                                                <p class="text-muted mb-4" id="productPrice"></p>
                                            </div>
                                            <div>
                                                <div class="d-flex justify-content-between">
                                                    <span>Kategori</span><span id="productCategory"></span>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <b>Deskripsi Produk</b>
                                                </div>
                                                <div class="justify-content-between">
                                                    <span id="productDescription"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body justify-content-center">
                                            <div class="d-flex justify-content-center align-items-center pb-2 mb-1">
                                                <a class="btn btn-primary" id="buyNowLink" aria-disabled="true"
                                                    role="button" target="_blank">Tanyakan Produk</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
