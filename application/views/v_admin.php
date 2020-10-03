 <!-- Begin Page Content -->
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

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <a href="<?php echo base_url() ?>home/tambah_barang" class="btn btn-primary btn-icon-split">
                 <span class="icon text-white-50">
                     <i class="fas fa-plus"></i>
                 </span>
                 <span class="text">Add Data</span>
             </a>
         </div>

         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th class="bg-primary text-light ">No</th>
                             <th class="bg-primary text-light ">Nama Barang</th>
                             <th class="bg-primary text-light " style="width:600px;">Deskripsi Barang</th>
                             <th class="bg-primary text-light ">Harga</th>
                             <th class="bg-primary text-light ">Gambar</th>
                             <th class="bg-primary text-light ">Aksi</th>
                         </tr>
                         </tr>
                     </thead>
                     <tfoot>
                         <tr>
                             <th class="bg-primary text-light ">No</th>
                             <th class="bg-primary text-light ">Nama Barang</th>
                             <th class="bg-primary text-light " style="width:600px;">Deskripsi Barang</th>
                             <th class="bg-primary text-light ">Harga</th>
                             <th class="bg-primary text-light ">Gambar</th>
                             <th class="bg-primary text-light ">Aksi</th>
                         </tr>
                     </tfoot>
                     <tbody>
                         <?php
                            $no = 1;
                            foreach ($barang as $brg) : ?>
                             <tr>
                                 <td><?php echo $no++; ?></td>
                                 <td><?php echo $brg->nama_barang ?></td>
                                 <td><?php echo $brg->deskripsi_barang ?></td>
                                 <td>Rp. <?php echo $brg->harga_barang ?></td>
                                 <td><?php echo $brg->gambar ?></td>
                                 <td>
                                     <!-- <?php echo anchor('home/edit_barang/' . $brg->id_barang, '<div class="btn btn-primary btn-circle btn-sm"><i class="far fa-edit "></i></div>') ?> -->
                                     <!-- <?php echo anchor('home/hapus_barang/' . $brg->id_barang, '<div class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash" ></i></div>') ?> -->
                                     <a href="<?= base_url(); ?>home/edit_barang/<?= $brg->id_barang ?>" class="btn btn-primary btn-circle btn-sm"><i class="far fa-edit"></i></a>
                                     <a href="<?= base_url(); ?>home/hapus_barang/<?= $brg->id_barang ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus"><i class="fas fa-trash"></i></a>
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
         <!-- awal modal -->

         <!-- Modal Tambah pembuka -->
         <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Form Add Data Barang</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <div class="modal-body">

                         <form method="post" action="">

                             <div class="form-group">
                                 <label for="exampleInputEmail1">Nama Barang</label>
                                 <input type="text" name="nama_barang" class="form-control" id="nama_barang" aria-describedby="namabarang" placeholder="Enter Nama Barang..">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Harga Barang</label>
                                 <input type="number" name="harga_barang" class="form-control" id="exampleInputPassword1" placeholder="Enter Harga Barang..">
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
                                 <textarea class="form-control" name="deskripsi_barang" id="exampleFormControlTextarea1" placeholder="Enter Deskripsi Barang.." rows="3"></textarea>
                             </div>
                             <div class="form-group">
                                 <label for="exampleFormControlFile1">Input Image</label>
                                 <input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
                             </div>
                             <button type="submit" class="btn btn-primary">save</button>

                         </form>
                     </div>
                 </div>
             </div>
         </div> -->
         <!-- akhir modal tambah -->

     </div>



 </div>

 <!-- /.container-fluid -->
 </div>
 <!-- End of Main Content -->