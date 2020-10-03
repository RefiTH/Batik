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
                            <th class="bg-primary text-light ">Profile</th>
                            <!-- <th class="bg-primary text-light ">Map</th> -->
                            <th class="bg-primary text-light ">Village</th>
                            <th class="bg-primary text-light ">Sub-district</th>
                            <th class="bg-primary text-light ">District</th>
                            <th class="bg-primary text-light ">Hp</th>
                            <th class="bg-primary text-light ">Instagram</th>
                            <th class="bg-primary text-light ">Action</th>
                        </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="bg-primary text-light ">No</th>
                            <th class="bg-primary text-light ">Profile</th>
                            <!-- <th class="bg-primary text-light ">Map</th> -->
                            <th class="bg-primary text-light ">Village</th>
                            <th class="bg-primary text-light ">Sub-district</th>
                            <th class="bg-primary text-light ">District</th>
                            <th class="bg-primary text-light ">Hp</th>
                            <th class="bg-primary text-light ">Instagram</th>
                            <th class="bg-primary text-light ">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($lokasi as $lks) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $lks->profile ?></td>
                                <!-- <td style="max-width: 100px;"><?php echo $lks->map ?></td> -->
                                <td> <?php echo $lks->desa ?></td>
                                <td><?php echo $lks->kecamatan ?></td>
                                <td><?php echo $lks->kabupaten ?></td>
                                <td> <?php echo $lks->no_hp ?></td>
                                <td><?php echo $lks->instagram ?></td>
                                <td>
                                    <!-- <?php echo anchor('home/edit_berita/' . $lks->id_lokasi, '<div class="btn btn-primary btn-circle btn-sm"><i class="far fa-edit"></i></div>') ?> -->
                                    <a href="<?= base_url(); ?>home/edit_location/<?= $lks->id_lokasi ?>" class="btn btn-primary btn-circle btn-sm"><i class="far fa-edit"></i></a>
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