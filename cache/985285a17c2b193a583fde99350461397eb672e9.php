	<?php $__env->startSection('content'); ?>
	<h3 class="text-primary mb-4">Lap. Persediaan Masuk</h3>
	<div class="row mb-2">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-block">
					<h5 class="card-title mb-4">Cetak Berdasarkan Tanggal</h5>
					<form target="_blank" action="<?php echo e(base_url('lap_barang_masuk/cetak')); ?>" method="get" autocomplete="off">
						<div class="form-group">
							<label for="">Tanggal Awal</label>
							<input name="tgl_awal" type="text" class="form-control datepicker">
						</div>
						<div class="form-group">
							<label for="">Tanggal Akhir</label>
							<input name="tgl_akhir" type="text" class="form-control datepicker">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Cetak</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php $__env->stopSection(); ?>
	<?php $__env->startPush('scripts'); ?>
		<script>
			$(document).ready(function() {
          		$(".datepicker").click(function() {
					autoclose:true
				});
			});
		</script>
	<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/lap_barang_masuk/index.blade.php ENDPATH**/ ?>