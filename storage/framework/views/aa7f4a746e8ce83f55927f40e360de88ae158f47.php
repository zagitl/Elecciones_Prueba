
<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        Editar Candidato
    </div>
    <div class="card-body">
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div><br />
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('candidato.update', $candidato->id)); ?>" 
            enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" class="form-control" 
                readonly="true" value="<?php echo e($candidato->id); ?>" name="id" />
            </div>
            <div class="form-group">
                <label for="nombrecompleto">Nombre completo:</label>
                <input type="text" value="<?php echo e($candidato->nombrecompleto); ?>" 
                class="form-control" 
                name="nombrecompleto" />
            </div>    
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <?php 
                    $selectedWomen = $candidato->sexo=='M'?" selected ":""; 
                    $selectedMen =   $candidato->sexo=='H'?" selected ":""; 
                ?>
                <select name="sexo" id="sexo">
                    <option value="M" <?php echo e($selectedWomen); ?>>Mujer</option>
                    <option value="H" <?php echo e($selectedMen); ?> >Hombre</option>
                </select>
            </div>  
            <div class="form-group">
                <input type="file" id="foto" name="foto" 
                accept="image/png, image/jpeg" 
                 >
            </div>
            <div class="form-group">
                <label for="perfil">Perfil:</label>
                <input type="file" id="perfil" name="perfil" 
                accept="application/pdf"
                >
            </div>                            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto_laravel/resources/views/candidato/edit.blade.php ENDPATH**/ ?>