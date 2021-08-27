<?php $__env->startSection('content'); ?>
<h3 class="text-primary mb-4">Data Kategori</h3>
	<div class="row mb-2">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-block">
                    <div class="card-header">
                        <a href="<?php echo e(base_url('kategori/create')); ?>" class="btn btn-small btn-success"><i class="fa fa-plus"></i> Tambah Data Kategori</a>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['success']) == 'success'): ?>
						<div class="alert alert-success" role="alert">Data berhasil di<?php echo e($_SESSION['success']); ?></div>
						<?php elseif(isset($_SESSION['success']) == 'error'): ?>
							<div class="alert alert-danger" role="alert">Data gagal di<?php echo e($_SESSION['error']); ?></div>
						<?php endif; ?>
						<table id="datatable" class="table table-striped dataTable dtr-column collapsed">
							<thead>
								<tr>
									<th>#</th>
									<th>Kategori </th>
									<th>Aksi </th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no=1;
								?>
								<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($no); ?></td>
										<td><?php echo e($r->nama_kategori); ?></td>
										<td width="200px">
											<a href="<?php echo e(base_url('kategori/edit').'?id='.$r->id_kategori); ?>" class="btn btn-small btn-warning"><i class="fa fa-edit"></i> Edit</a>
											<button data-delete="<?php echo e($r->id_kategori); ?>" class="btn-delete btn btn-small btn-danger"><i class="fa fa-trash"></i> Hapus</a>
										</td>
									</tr>
								<?php
									$no++;
								?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
                    </div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $(".btn-delete").click(function() {
                var hapus = confirm('yakin data akan dihapus?');
                var id = $(this).attr('data-delete');
                if(hapus == true){
                    window.location.href="<?php echo e(base_url('kategori/delete')); ?>"+'?id='+id;
                }else{
                    return false;
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/kategori/table.blade.php ENDPATH**/ ?>