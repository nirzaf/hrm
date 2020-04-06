<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="panel panel-bd lobidrag">
            <div class="panel-heading">
                <div class="panel-title">
                    <h4><?php echo (!empty($title)?$title:null) ?></h4>
                </div>
            </div>
            <div class="panel-body">
 
                <?php echo form_open('dashboard/message/new_message/','class="form-inner"') ?>

                    <div class="form-group row">
                        <label for="receiver_id" class="col-xs-3 col-form-label"><?php echo display('receiver_name') ?> *</label>
                        <div class="col-xs-9">
                            <?php echo form_dropdown('receiver_id', $user_list, $message->receiver_id ,'class="form-control" id="receiver_id"') ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subject" class="col-xs-3 col-form-label"><?php echo display('subject') ?> *</label>
                        <div class="col-xs-9">
                            <input name="subject"  type="text" class="form-control" id="subject" placeholder="<?php echo display('subject') ?>" value="<?php echo $message->subject ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="message" class="col-xs-3 col-form-label"><?php echo display('message') ?> *</label>
                        <div class="col-xs-9">
                            <textarea name="message" class="form-control tinymce"  placeholder="<?php echo display('message') ?>"  rows="7"><?php echo $message->message ?></textarea>
                        </div>
                    </div>  
                    

                    <div class="form-group  text-right">
                        <button type="reset" class="btn btn-primary w-md m-b-5"><?php echo display('reset') ?></button>
                        <button type="submit" class="btn btn-success w-md m-b-5"><?php echo display('send') ?></button>
                    </div>

                <?php echo form_close() ?>
            </div> 
        </div>
    </div>
</div>








 