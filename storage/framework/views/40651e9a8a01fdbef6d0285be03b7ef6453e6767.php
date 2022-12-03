
<?php $__env->startSection('content'); ?>

<div class="card uper">
    <div class="card-header">
        Agregar Candidato
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
        <form method="post" 
            action="<?php echo e(route('candidato.store')); ?> " 
            enctype="multipart/form-data" 
            onsubmit="return validateData();">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nombrecompleto">Nombre:</label>
                <input type="text" class="form-control" 
                    id="nombrecompleto"
                    name="nombrecompleto" />
            </div>
            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo">
                    <option value="M" selected>Mujer</option>
                    <option value="H">Hombre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" 
                accept="image/png, image/jpeg" 
                onchange="preview(event,'previewImage');"
                >
                <div id="previewImage"></div>
            </div>
            <div class="form-group">
                <label for="perfil">Perfil:</label>
                <input type="file" id="perfil" name="perfil" 
                accept="application/pdf"
                onchange="preview(event,'previewPDF');"
                >
                <div id="previewPDF"></div>
            </div>
            <div class="form-group">
                <label for="curp">curp:</label>
                <input type="text" 
                    id="curp" 
                    name="curp" 
                    onfocusout="validate(this)"
                >
            </div>
            <div class="form-group">
                <label for="edad">edad:</label>
                <input type="text" 
                    class="numberonly"
                    id="edad" 
                    name="edad" 
                    maxlength="3"
                >
            </div>            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
<script type="text/javascript" 
src="<?php echo e(URL::asset('js/custom.js')); ?>">
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/proyecto_laravel/resources/views/candidato/create.blade.php ENDPATH**/ ?>