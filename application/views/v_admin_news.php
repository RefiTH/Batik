<!-- sweetAlert -->
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    data was
                    <strong>successfully</strong><?= $this->session->flashdata('flash');
                                                    ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>
    <!-- akhir sweetAlert -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="bg-primary text-light ">No</th>
                            <th class="bg-primary text-light ">Nama Berita</th>
                            <th class="bg-primary text-light " style="width:600px;">Deskripsi</th>
                            <th class="bg-primary text-light ">Gambar</th>
                            <th class="bg-primary text-light ">Tanggal</th>
                            <th class="bg-primary text-light ">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="bg-primary text-light ">No</th>
                            <th class="bg-primary text-light ">Nama Berita</th>
                            <th class="bg-primary text-light " style="width:600px;">Deskripsi</th>
                            <th class="bg-primary text-light ">Gambar</th>
                            <th class="bg-primary text-light ">Tanggal</th>
                            <th class="bg-primary text-light ">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($berita as $brt) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $brt->nama_berita ?></td>
                                <td><?php echo $brt->deskripsi_berita ?></td>
                                <td> <?php echo $brt->gambar_berita ?></td>
                                <td><?php echo $brt->tanggal_berita ?></td>
                                <td>
                                    <!-- <?php echo anchor('home/edit_berita/' . $brt->id_berita, '<div class="btn btn-primary btn-circle btn-sm"><i class="far fa-edit"></i></div>') ?> -->
                                    <a href="<?= base_url(); ?>home/edit_berita/<?= $brt->id_berita ?>" class="btn btn-primary btn-circle btn-sm"><i class="far fa-edit"></i></a>
                                </td>



                                <!-- <td>
                                    <div class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></div>
                                </td> -->

                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>