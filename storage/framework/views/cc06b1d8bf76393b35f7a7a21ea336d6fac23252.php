<?php $__env->startSection('content'); ?>
<div class="col-xl-12">
    <div class="row">
        <div class="col-xl-10 mx-auto mt-5">
        
            <div class="card">
                <div class="table-responsive">
                    <div class="card-body">
                    <table class="table" width="100%" >
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Intern ID</th>
                                <th>Name</th>
                                <th>School</th>
                                <th>Email</th>
                                <th>Google drive link</th>
                                <th>Proof of attendance</th>
                                <th>Approved At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $registrations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $register): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo e($register->intern_id ?? ''); ?>

                                    </td>
                                    <td>
                                        <?php echo e($register->name ?? ''); ?>

                                    </td>
                                    <td>
                                        <?php echo e($register->school ?? ''); ?>

                                    </td>
                                    <td>
                                        <?php echo e($register->email ?? ''); ?>

                                    </td>
                                    <td>
                                        <a target="_blank" href="<?php echo e($register->google_drive ?? ''); ?>"><?php echo e($register->google_drive ?? ''); ?></a>
                                        
                                    </td>
                                    <td>
                                        
                                        <a target="_blank" href="/assets/attach_attendance/<?php echo e($register->attach_attendance ?? ''); ?>"><?php echo e($register->attach_attendance ?? ''); ?></a>
                                    </td>
                                    <td>
                                        <?php echo e(\Carbon\Carbon::parse($register->updated_at)->isoFormat('h:s A / MMM D YYYY')); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </tbody>
                    </table>
                    </div>
                    
                </div>
                
            </div>
          
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
$(document).ready(function () {
    $('.table').DataTable({
        bDestroy: true,
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        'columnDefs': [{ 'orderable': false, 'targets': 0 }],

        buttons: [
            { 
                extend: 'print',
                className: 'd-none',
            }
        ],
    });

});



</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\offboarding-updated\resources\views/admin/registration/master_list.blade.php ENDPATH**/ ?>