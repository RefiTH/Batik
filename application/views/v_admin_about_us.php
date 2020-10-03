<!-- DataTales Example -->
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
<div class="card shadow mb-4">
    <div class="container-fluid">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="bg-primary text-light ">No</th>
                            <th class="bg-primary text-light ">Name user</th>
                            <th class="bg-primary text-light ">Email user</th>
                            <th class="bg-primary text-light " style="width:600px;">Massage</th>
                            <th class="bg-primary text-light ">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="bg-primary text-light ">No</th>
                            <th class="bg-primary text-light ">Name user</th>
                            <th class="bg-primary text-light ">Email user</th>
                            <th class="bg-primary text-light " style="width:600px;">Massage</th>
                            <th class="bg-primary text-light ">Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($contact as $cnt) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $cnt->nama_user ?></td>
                                <td><?php echo $cnt->email_user ?></td>
                                <td> <?php echo $cnt->massage ?></td>
                                <td>
                                    <!-- <?php echo anchor('home/hapus_massage/' . $cnt->id_contact, '<div class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></div>') ?> -->
                                    <a href="<?= base_url(); ?>home/hapus_massage/<?= $cnt->id_contact ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus"><i class="fas fa-trash"></i></a>
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