<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-black" id="productName"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="black">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="card text-black">
                                    <div class="main-image text-center mb-4">
                                        <img id="mainProductImage" class="img-fluid" alt="Main Product Image">
                                    </div>
                                    <div class="thumbnail-images d-flex justify-content-center">
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-between">
                                                        <span><b>Kategori : </b></span><span
                                                            id="productCategory"></span>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="d-flex justify-content-center">
                                                        <b>Deskripsi Produk</b>
                                                    </div>
                                                    <div class="justify-content-between">
                                                        <span id="productDescription"></span>
                                                    </div>
                                                </li>
                                            </ul>
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
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
