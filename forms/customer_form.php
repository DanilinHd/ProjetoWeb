<fieldset>
    <div class="form-group">
        <label for="f_name">Primeiro nome *</label>
          <input type="text" name="f_name" value="<?php echo htmlspecialchars($edit ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Primeiro Nome" class="form-control" required="required" id = "f_name" >
    </div> 

    <div class="form-group">
        <label for="l_name">Sobrenome *</label>
        <input type="text" name="l_name" value="<?php echo htmlspecialchars($edit ? $customer['l_name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Sobrenome" class="form-control" required="required" id="l_name">
    </div> 

    <div class="form-group">
        <label>Genero * </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="male" <?php echo ($edit &&$customer['gender'] =='male') ? "checked": "" ; ?> required="required"/> Masculino
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="female" <?php echo ($edit && $customer['gender'] =='female')? "checked": "" ; ?> required="required" id="female"/> Feminino
        </label>
    </div>

    <div class="form-group">
        <label for="address">Endereço</label>
          <textarea name="address" placeholder="Endereço" class="form-control" id="address"><?php echo htmlspecialchars(($edit) ? $customer['address'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div> 
    
    <div class="form-group">
        <label>Estado </label>
           <?php $opt_arr = array("DF", "São Paulo", "Rio de Janeiro", "Santa Catarina", "Belo horizonte"); 
                            ?>
            <select name="state" class="form-control selectpicker" required>
                <option disabled selected value=" " >Por favor, selecione seu estado </option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $customer['state']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div>  
    <div class="form-group">
        <label for="email">Email</label>
            <input  type="email" name="email" value="<?php echo htmlspecialchars($edit ? $customer['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="E-Mail" class="form-control" id="email">
    </div>

    <div class="form-group">
        <label for="phone">Telefone</label>
            <input name="phone" value="<?php echo htmlspecialchars($edit ? $customer['phone'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="ex: (dd) 98888-8888" class="form-control"  type="text" id="phone">
    </div> 

    <div class="form-group">
        <label>Data de nascimento</label>
        <input name="date_of_birth" value="<?php echo htmlspecialchars($edit ? $customer['date_of_birth'] : '', ENT_QUOTES, 'UTF-8'); ?>"  placeholder="Data de nascimento" class="form-control"  type="date">
    </div>

    <div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-warning" >Salvar <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
