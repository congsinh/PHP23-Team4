<?php $__env->startSection('content'); ?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Đăng nhập</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <form action="<?php echo e(URL::route('login-user')); ?>" method="POST" >
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="password">Passwrod</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <input type="submit" class="btn btn-success" value="Đăng Nhập">
                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Forgot Your Password?')); ?>

                </a>
            </form>
        </div>

    </div>
    <br><br><br><br>

    
        
            
                

                
                    
                        

                        
                            

                            
                                

                                
                                    
                                        
                                    
                                
                            
                        

                        
                            

                            
                                

                                
                                    
                                        
                                    
                                
                            
                        

                        
                            
                                
                                    
                                        
                                    
                                
                            
                        

                        
                            
                                
                                    
                                

                                
                                    
                                
                            
                        
                    
                
            
        
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('pages.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>