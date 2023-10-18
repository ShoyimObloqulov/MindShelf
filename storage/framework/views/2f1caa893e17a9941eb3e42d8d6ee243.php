<div>
    <div class="m-5">
        <div class="relative overflow-x-auto">
            <a href="<?php echo e(route('base.create')); ?>" type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900"><i class="fa fa-plus"></i> Qo'shish</a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Desc
                    </th>
                    <th scope="col" class="px-6 py-3">
                        File
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php $id = 1 ?>
                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $base; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo e($id); ?>

                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo e($b->name); ?>

                        </th>
                        <td class="px-6 py-4">
                            <?php echo e($b->desc); ?>

                        </td>
                        <td class="px-6 py-4">
                            <a href="<?php echo e(asset('storage/uploads/'.$b->image)); ?>" class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" download="<?php echo e($b->image); ?>"><i class="fa fa-download"></i> Download</a>
                        </td>
                        <td class="px-6 py-4">
                            <!--[if BLOCK]><![endif]--><?php if($b->status): ?>
                                <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                    <span class="w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                                    Ochiq
                                </span>
                            <?php else: ?>
                                <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                    <span class="w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                                    Yopiq
                                </span>
                            <?php endif; ?> <!--[if ENDBLOCK]><![endif]-->
                        </td>
                        <td class="px-6 py-4">
                            <button wire:click="baseDelete(<?php echo e($b->id); ?>)"><i class="text-red-500 text-xl fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <?php $id++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> <!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php /**PATH D:\OSPanel\domains\mindshelf\resources\views/livewire/base.blade.php ENDPATH**/ ?>