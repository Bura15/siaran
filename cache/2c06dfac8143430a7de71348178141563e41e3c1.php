<div class="form-group">
    <label for="satuan">Nama Satuan</label>
    <input type="text" name="satuan" id="satuan" value="<?php echo e($field->satuan ?? ''); ?>"
    class="form-control <?php echo e((form_error('satuan')) ? 'is-invalid' : ''); ?>" >
    <div class="invalid-feedback">
        <?php echo (form_error('satuan')) ? form_error('satuan') : ''; ?> 
    </div>
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?php echo e(base_url('satuan')); ?>" class="btn btn-danger">Kembali</a>
</div><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/satuan/form.blade.php ENDPATH**/ ?>