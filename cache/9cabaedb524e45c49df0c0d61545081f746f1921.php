<?php $__env->startSection('content'); ?>
	<h3 class="text-primary mb-4">Data Admin</h3>
	<div class="row mb-2">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-block">
					<h5 class="card-title mb-4">Form Admin</h5>
					<form action="" method="POST" class="forms-sample" autocomplete="off">
                        <?php echo $__env->make('admin.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </form>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/admin/edit.blade.php ENDPATH**/ ?>