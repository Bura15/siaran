<?php if(validation_errors() != false): ?>
<div class="col-12">
    <div class="alert alert-danger" role="alert">
        <?php echo validation_errors(); ?>

    </div>
</div>
<?php endif; ?>
<div class="col-12 mb-4">
    <label for="nip">NIP</label>
        <input type="text" name="nip" id="nip" value="<?php echo e($field->nip ?? ''); ?>"
        class="form-control <?php echo e((form_error('nip')) ? 'is-invalid' : ''); ?>" >
    <div class="invalid-feedback">
        <?php echo (form_error('nip')) ? form_error('nip') : ''; ?> 
    </div>
</div>
<div class="col-12 mb-4">
    <label for="nama_pegawai">Nama Pegawai</label>
        <input type="text" name="nama_pegawai" id="nama_pegawai" value="<?php echo e($field->nama_pegawai ?? ''); ?>"
        class="form-control <?php echo e((form_error('nama_pegawai')) ? 'is-invalid' : ''); ?>" >
    <div class="invalid-feedback">
        <?php echo (form_error('nama_pegawai')) ? form_error('nama_pegawai') : ''; ?> 
    </div>
</div>
<div class="col-12 mb-4">
    <label for="tlp">Nomor HP</label>
        <input type="text" name="tlp" id="tlp" value="<?php echo e($field->tlp ?? ''); ?>"
        class="form-control <?php echo e((form_error('tlp')) ? 'is-invalid' : ''); ?>" >
    <div class="invalid-feedback">
        <?php echo (form_error('tlp')) ? form_error('tlp') : ''; ?> 
    </div>
</div>
<div class="col-12 mb-4">
    <label for="jabatan">Jabatan</label>
    <select name="jabatan" id="jabatan" 
        class="form-control <?php echo e((form_error('jabatan')) ? 'is-invalid' : ''); ?>">
        <option value="">Pilih Jabatan</option>
        <?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option 
                <?php echo e(!isset($field->jabatan) ? '' : (($item->jabatan == $field->jabatan) ? 'selected' : '')); ?> 
                value="<?php echo e($item->jabatan); ?>"><?php echo e($item->jabatan); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select> 
    <div class="invalid-feedback">
        <?php echo (form_error('jabatan')) ? form_error('jabatan') : ''; ?> 
    </div>
</div>
<div class="col-12 mb-4">
    <label for="bagian">Unit</label>
    <select name="bagian" id="bagian" 
        class="form-control <?php echo e((form_error('bagian')) ? 'is-invalid' : ''); ?>">
        <option value="">Pilih Unit</option>
        <?php $__currentLoopData = $bagian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option 
                <?php echo e(!isset($field->bagian) ? '' : (($item->bagian == $field->bagian) ? 'selected' : '')); ?> 
                value="<?php echo e($item->bagian); ?>"><?php echo e($item->bagian); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select> 
    <div class="invalid-feedback">
        <?php echo (form_error('bagian')) ? form_error('bagian') : ''; ?> 
    </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo e(base_url('pegawai')); ?>" class="btn btn-danger">Kembali</a>
</div><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/pegawai/form.blade.php ENDPATH**/ ?>