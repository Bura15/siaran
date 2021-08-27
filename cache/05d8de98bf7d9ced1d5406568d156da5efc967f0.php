<?php if(validation_errors() != false): ?>
<div class="col-12">
    <div class="alert alert-danger" role="alert">
        <?php echo validation_errors(); ?>

    </div>
</div>
<?php endif; ?>
<div class="col-12 mb-4">
    <label for="id_pegawai">Pegawai</label>
    <select name="id_pegawai" id="id_pegawai" 
        class="form-control <?php echo e((form_error('id_pegawai')) ? 'is-invalid' : ''); ?>">
        <option value="">Pilih Pegawai</option>
        <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option 
                <?php echo e(!isset($field->id_pegawai) ? '' : (($item->id_pegawai == $field->id_pegawai) ? 'selected' : '')); ?> 
                value="<?php echo e($item->id_pegawai); ?>"><?php echo e($item->nama_pegawai.' - '.$item->jabatan.' - '.$item->bagian); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select> 
    <div class="invalid-feedback">
        <?php echo (form_error('id_pegawai')) ? form_error('id_pegawai') : ''; ?> 
    </div>
</div>
<div class="col-12 mb-4">
    <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo e($field->username ?? ''); ?>"
        class="form-control <?php echo e((form_error('username')) ? 'is-invalid' : ''); ?>" >
    <div class="invalid-feedback">
        <?php echo (form_error('username')) ? form_error('username') : ''; ?> 
    </div>
</div>
<div class="col-12 mb-4">
    <label for="password">Password</label>
        <input type="password" name="password" id="password" value="<?php echo e($field->password ?? ''); ?>"
        class="form-control <?php echo e((form_error('password')) ? 'is-invalid' : ''); ?>" >
    <div class="invalid-feedback">
        <?php echo (form_error('password')) ? form_error('password') : ''; ?> 
    </div>
</div>
<div class="col-12 mb-4">
    <label for="confirm_password">Konfirmasi Password</label>
        <input type="password" name="confirm_password" id="confirm_password" value="<?php echo e($field->confirm_password ?? ''); ?>"
        class="form-control <?php echo e((form_error('confirm_password')) ? 'is-invalid' : ''); ?>" >
    <div class="invalid-feedback">
        <?php echo (form_error('confirm_password')) ? form_error('confirm_password') : ''; ?> 
    </div>
</div>
<div class="col-12 mb-4">
    <label for="bagian">Level</label>
    <select name="level" id="level" 
        class="form-control <?php echo e((form_error('level')) ? 'is-invalid' : ''); ?>">
        <option value="">Pilih Level</option>
        <option value="Administrator">Administrator</option>
        <option value="BMN">BMN</option>
        <option value="Pegawai">Pegawai</option>
        <option value="Verifikator">Verifikator</option>
    </select> 
    <div class="invalid-feedback">
        <?php echo (form_error('level')) ? form_error('level') : ''; ?> 
    </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo e(base_url('admin')); ?>" class="btn btn-danger">Kembali</a>
</div><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/admin/form.blade.php ENDPATH**/ ?>