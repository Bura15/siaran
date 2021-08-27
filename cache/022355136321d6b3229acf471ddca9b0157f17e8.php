<input type="hidden" id="lokasi_url" value="<?php echo e(($mode == 'create') ? 'barang_masuk/create' : 'barang_masuk/edit'); ?>">
<input type="hidden" id="mode" value="<?php echo e(($mode == 'create') ? 'create' : 'edit'); ?>">
<?php
    $url_delete_detail = ($mode == 'create') ? 'mode='.$mode : 'mode='.$mode.'&id_barang_masuk='.$_GET['id'];
    $url_simpan_detail = ($mode == 'create') ? 'create' : 'edit?id='.$_GET['id'];
?>
<h3 class="text-primary mb-4">Persediaan Masuk</h3>
<div class="row mb-2">
    <div class="col-lg-12 mb-4">
        <div class="card">
            <div class="card-block">
                <div class="card-header">
                    <h3>Form Persediaan Masuk</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <?php if(isset($_SESSION['success']) == 'success'): ?>
                                <div class="alert alert-success" role="alert">Data berhasil di<?php echo e($_SESSION['success']); ?></div>
                                <hr>
                            <?php elseif(isset($_SESSION['error']) == 'error'): ?>
                                <div class="alert alert-danger" role="alert">Data gagal di<?php echo e($_SESSION['error']); ?></div>
                                <hr>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            
                            <div class="form-group">
                                <label for="kode_barang">Kode Barang</label>
                                <select name="kode_barang" id="kode_barang" class="form-control">
                                    <option value="">Pilih Barang</option>
                                    <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option satuan="<?php echo e($item->satuan); ?>"  
                                     
                                        stok="<?php echo e($item->stok); ?>" 
                                        nama="<?php echo e($item->nama_barang); ?>" 
                                        harga="<?php echo e($item->harga); ?>" 
                                        value="<?php echo e($item->id_barang); ?>"><?php echo e($item->kode_barang); ?> - <?php echo e($item->nama_barang); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 d-none">
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input type="text" name="nama_barang" id="nama_barang" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-3 d-none">
                            <div class="form-group">
                                <label for="satuan">Satuan</label>
                                <input type="text" name="satuan" id="satuan" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text" name="stok" id="stok" class="form-control" readonly>
                            </div>
                        </div>
                       <!--  <div class="col-md-1">
                            <div class="form-group">
                                <label for="min_stok">Min Stok</label>
                                <input type="text" name="min_stok" id="min_stok" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="max_stok">Max Stok</label>
                                <input type="text" name="max_stok" id="max_stok" class="form-control" readonly>
                            </div>
                        </div> -->
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="jml">Qty</label>
                                <input type="text" name="jml" id="jml" class="form-control">
                            </div>
                        </div>
                        <!-- <div class="col-md-2">
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" id="harga" class="form-control">
                            </div>
                        </div> -->
                        <div class="col-md-1">
                            <div class="form-group">
                                <label for="stok"><br></label><br>
                                <button id="btnTambahBarang" class="btn btn-primary">Tambah Barang</button>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                             <div class="form-group">
                                <label for="tgl_barang_masuk">Tanggal Transaksi</label>
                                <input type="hidden" id="id_barang_masuk" value="<?php echo e($r->id_barang_masuk ?? ''); ?>">
                                <input type="text" id="tgl_barang_masuk" value="<?php echo e(date('m/d/Y', strtotime($r->tgl_barang_masuk ?? date('m/d/Y'))) ?? ''); ?>" class="datepicker form-control">
                            </div>
                            <div class="form-group">
                                <label for="id_supplier">Supplier</label>
                                <select name="id_supplier" id="id_supplier" class="form-control">
                                    <option value="">Pilih Supplier</option>
                                    <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option 
                                        <?php if(isset($r->id_supplier) != ""): ?>
                                            <?php echo e(($r->id_supplier == $item->id_supplier) ? 'selected' : ''); ?> 
                                        <?php endif; ?>
                                        
                                        value="<?php echo e($item->id_supplier); ?>"><?php echo e($item->nama_supplier); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button id="btnSimpanTransaksi" class="btn btn-success">Simpan </button>
                                <a href="<?php echo e(base_url('barang_masuk')); ?>" class="btn btn-danger">Kembali</a>
                            </div>

                        </div>
                    </div>
                    
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped dataTable dtr-column collapsed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                       <!-- <th>Harga</th>-->
                                        <th>Qty</th>
                                        <th>Satuan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $no =1;
                                    ?>
                                    <?php $__currentLoopData = $tmp_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($no); ?></td>
                                                <td><?php echo e($item->kode_barang); ?></td>
                                                <td><?php echo e($item->nama_barang); ?></td>
                                                <!--<td><?php echo e($item->harga_tmp); ?></td>-->
                                                <td><?php echo e($item->jml_tmp); ?></td>
                                                <td><?php echo e($item->satuan); ?></td>
                                                <td>
                                                    <a href="<?php echo e(base_url('barang_masuk/delete_tmp?id=').$item->id_tmp.'&'.$url_delete_detail); ?>" class="btn-delete btn btn-small btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no ++;
                                        ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#kode_barang').select2();
            $('#id_supplier').select2();
            $("#kode_barang").change(function() {
                var nama_barang = $(this).children("option:selected").attr('nama');
                var stok = $(this).children("option:selected").attr('stok');
                var min_stok = $(this).children("option:selected").attr('min_stok');
                var max_stok = $(this).children("option:selected").attr('max_stok');
                var satuan = $(this).children("option:selected").attr('satuan');
                var harga = $(this).children("option:selected").attr('harga');
                $('#nama_barang').val(nama_barang);
                $('#stok').val(stok);
                $('#min_stok').val(min_stok);
                $('#max_stok').val(max_stok);
                $('#satuan').val(satuan);
                $('#harga').val(harga);
            });
            $("#btnTambahBarang").click(function() {
                var mode = $('#mode').val();
                var id_barang_masuk = $('#id_barang_masuk').val();
                var nama_barang = $('#nama_barang').val();
                var jml = parseInt($('#jml').val());
                var harga = parseInt($('#harga').val());
                var id_barang = $('#kode_barang').val();

                let min_stok = parseInt($('#min_stok').val());
                let max_stok = parseInt($('#max_stok').val());
                let stok=parseInt($('#stok').val());

                var verif_stok = jml+stok;
                // var verif_max_stok = max_stok+stok;
                // return false;
                if(verif_stok < min_stok || verif_stok > max_stok){
                    // alert(verif_min_stok);
                    alert('jumlah barang dipesan tidak boleh kurang dari min stok / lebih dari max stok');
                    return false;
                }
                if(nama_barang == '' || jml == ''){
                    alert('data tidak boleh kosong!');
                    return false;
                }else{
                    var data = {
                        id_barang_masuk : id_barang_masuk,
                        id_barang : id_barang,
                        jml : jml,
                        harga : harga,
                        mode:mode
                    }
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(base_url('barang_masuk/simpan_tmp')); ?>",
                        data: data,
                        success: function (msg) { 
                            if(msg == 'sukses'){
                                alert('berhasil ditambahkan');
                                window.location.href="<?php echo e(base_url().'barang_masuk/'.$url_simpan_detail); ?>";
                            }else{
                                alert('gagal di tambahkan');
                            }
                        }
                    });
                }
            });

            $("#btnSimpanTransaksi").click(function() {
                var mode = $('#mode').val();
                var id_barang_masuk = $('#id_barang_masuk').val();
                var tgl_barang_masuk = $('#tgl_barang_masuk').val();
                var id_supplier = $('#id_supplier').val();
                if(tgl_barang_masuk == ''){
                    alert('data tidak boleh kosong!')
                }else{
                    var data = {
                        id_barang_masuk : id_barang_masuk,
                        tgl_barang_masuk : tgl_barang_masuk,
                        id_supplier : id_supplier,
                        mode:mode
                    }
                    $.ajax({
                        type: "POST",
                        url: "<?php echo e(base_url('barang_masuk/simpan')); ?>",
                        data: data,
                        success: function (msg) { 
                            if(msg == 'sukses'){
                                alert('berhasil disimpan');
                                window.location.href="<?php echo e(base_url('barang_masuk')); ?>";
                            }else{
                                alert('gagal di disimpan');
                            }
                        }
                    });
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\persediaan-bpom5\application\views/barang_masuk/form.blade.php ENDPATH**/ ?>