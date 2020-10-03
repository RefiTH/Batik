<div class="container">
    <div class="content-wrapper">
        <section class="content">
            <?php foreach ($lokasi as $lks) { ?>
                <form action="<?php echo base_url() . 'home/update_lks'; ?>" method="post">

                    <div class="form-group">
                        <label>Profile</label>
                        <input type="hidden" name="id_lokasi" class="form-control" value="<?php echo $lks->id_lokasi ?>">
                        <input type="text" name="profile" class="form-control" value="<?php echo $lks->profile ?>">
                    </div>
                    <!-- <div class="form-group">
                        <label>Map</label>
                        <input type="text" name="map" class="form-control" value="<?php echo $lks->map ?>">
                    </div> -->
                    <div class="form-group">
                        <label>Village</label>
                        <input type="text" name="desa" class="form-control" value="<?php echo $lks->desa ?>">
                    </div>
                    <div class="form-group">
                        <label>Sub-district</label>
                        <input type="text" name="kecamatan" class="form-control" value="<?php echo $lks->kecamatan ?>">
                    </div>
                    <div class="form-group">
                        <label>District</label>
                        <input type="text" name="kabupaten" class="form-control" value="<?php echo $lks->kabupaten ?>">
                    </div>
                    <div class="form-group">
                        <label>Hp</label>
                        <input type="text" name="no_hp" class="form-control" value="<?php echo $lks->no_hp ?>">
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" name="instagram" class="form-control" value="<?php echo $lks->instagram ?>">
                    </div>

                    <button type="submit" class="btn btn-primary">save</button>


                </form>
            <?php } ?>
        </section>
    </div>
</div>
</div>