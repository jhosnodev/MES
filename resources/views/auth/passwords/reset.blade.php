<?php $__env->startSection('company', 'BF Global'); ?>
<?php $__env->startSection('title', 'Recuperación de Contraseña'); ?>

<?php $__env->startSection('guest-content'); ?>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="{{route('/')}}">
                                <img src="{{ asset('img/bfglobal-logo.png') }}" alt="BFGlobal">
                            </a>
                        </div>
                        <div class="login-form">

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="control-label">Dirección de Correo</label>

                            <div class="">
                                <input id="email" type="email" class="form-control au-input au-input--full" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">
                                    Enviar enlace para restablecer contraseña
                                </button>
                                <div class="register-link">
                                <p>
                                    ¿Ya tienes una cuenta?
                                    <a href="{{ route('login') }}">Inicia sesión</a>
                                </p>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>