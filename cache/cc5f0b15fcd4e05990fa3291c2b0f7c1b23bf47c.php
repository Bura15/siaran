	<?php $__env->startSection('content'); ?>
	<h3 class="text-primary mb-4">Lap. Kartu Stok</h3>
	<div class="row mb-2">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-block">
					<h5 class="card-title mb-4">Cetak Berdasarkan Tanggal</h5>
					<form target="_blank" action="<?php echo e(base_url('lap_kartu_stok/cetak')); ?>" method="get" autocomplete="off">
						<div class="form-group">
							<label for="">Barang</label>
							<select name="id_barang" id="id_barang" class="form-control">
								<?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($item->id_barang); ?>"><?php echo e($item->nama_barang); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
						</div>
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
				$('#id_barang').select2();
          		$(".datepicker").click(function() {
					autoclose:true
				});
			});
		</script>
	<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/lap_kartu_stok/index.blade.php ENDPATH**/ ?>