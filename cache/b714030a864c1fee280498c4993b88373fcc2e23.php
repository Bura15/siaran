
        <?php if(validation_errors() != false): ?>
        <div class="col-12 mb-4">
            <div class="alert alert-danger" role="alert">
                <?php echo validation_errors(); ?>

            </div>
        </div>
        <?php endif; ?>
        <div class="col-12 mb-4">
            <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_barang" id="nama_barang" value="<?php echo e($field->nama_barang ?? ''); ?>"
                class="form-control <?php echo e((form_error('nama_barang')) ? 'is-invalid' : ''); ?>" >
            <div class="invalid-feedback">
                <?php echo (form_error('nama_barang')) ? form_error('nama_barang') : ''; ?> 
            </div>
        </div>
        <div class="col-12 mb-4">
            <label for="nama_kategori">Kategori</label>
            <select name="nama_kategori" id="nama_kategori" 
                class="form-control <?php echo e((form_error('nama_kategori')) ? 'is-invalid' : ''); ?>">
                <option value="">Pilih Kategori</option>
                <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option 
                        <?php echo e(!isset($field->nama_kategori) ? '' : (($item->nama_kategori == $field->nama_kategori) ? 'selected' : '')); ?> 
                        value="<?php echo e($item->nama_kategori); ?>"><?php echo e($item->nama_kategori); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <div class="invalid-feedback">
                <?php echo (form_error('nama_kategori')) ? form_error('nama_kategori') : ''; ?> 
            </div>
        </div>
        <div class="col-12 mb-4">
            <label for="satuan">Satuan</label>
            <select name="satuan" id="satuan" 
                class="form-control <?php echo e((form_error('satuan')) ? 'is-invalid' : ''); ?>">
                <option value="">Pilih Satuan</option>
                <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option 
                        <?php echo e(!isset($field->satuan) ? '' : (($item->satuan == $field->satuan) ? 'selected' : '')); ?> 
                        value="<?php echo e($item->satuan); ?>"><?php echo e($item->satuan); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select> 
            <div class="invalid-feedback">
                <?php echo (form_error('satuan')) ? form_error('satuan') : ''; ?> 
            </div>
        </div>
        <!-- <div class="col-12 mb-4">
            <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" value="<?php echo e($field->harga ?? ''); ?>"
                class="form-control <?php echo e((form_error('harga')) ? 'is-invalid' : ''); ?>">
            <div class="invalid-feedback">
                <?php echo (form_error('harga')) ? form_error('harga') : ''; ?> 
            </div>
        </div>
        <div class="col-12 mb-4">
            <label for="lead_time">Lead Time</label>
                <input type="text" name="lead_time" id="lead_time" value="<?php echo e($field->lead_time ?? ''); ?>"
                class="form-control <?php echo e((form_error('lead_time')) ? 'is-invalid' : ''); ?>" >
            <div class="invalid-feedback">
                <?php echo (form_error('lead_time')) ? form_error('lead_time') : ''; ?> 
            </div>
        </div>
        <div class="col-12 mb-4">
            <label for="safety_stok">Safety Stok</label>
                <input type="text" name="safety_stok" id="safety_stok" value="<?php echo e($field->safety_stok ?? ''); ?>"
                class="form-control <?php echo e((form_error('safety_stok')) ? 'is-invalid' : ''); ?>" >
            <div class="invalid-feedback">
                <?php echo (form_error('safety_stok')) ? form_error('safety_stok') : ''; ?> 
            </div>
        </div> -->
        <div class="col-12 mb-4">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo e(base_url('barang')); ?>" class="btn btn-danger">Kembali</a>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/barang/form.blade.php ENDPATH**/ ?>