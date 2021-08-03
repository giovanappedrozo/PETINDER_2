<main class="container">
  <?php echo validation_errors(); ?>

  <?php echo form_open('usuarios/register'); ?>

    <div class="form-floating mb-4">
      <input type="text" id="nome" name="nome" class="form-control" placeholder="<?php echo $this->lang->line('PH_name'); ?>" required>
      <label for="nome"><?php echo $this->lang->line('Name'); ?></label>
    </div>

    <div class="form-floating mb-4">
    <input type="email" id="email" name="email" class="form-control" placeholder="<?php echo $this->lang->line('PH_email'); ?>" required>
      <label for="email"><?php echo $this->lang->line('Email'); ?></label>
    </div>

    <div class="form-floating mb-4">
      <input type="password" id="senha" name="senha" class="form-control" placeholder="********" required>
      <label for="senha"><?php echo $this->lang->line('Password'); ?></label>
    </div>

    <div class="form-floating mb-4">
      <input type="password" id="confirmacao" name="confirmacao" class="form-control" placeholder="********" required>
      <label for="confirmacao"><?php echo $this->lang->line('Conf_passwd'); ?></label>
    </div>

    <div class="form-outline mb-4">
      <select name="genero" id="genero" class="form-select" placeholder="<?php echo $this->lang->line('Gender'); ?>">
      <option value="" selected disabled><?php echo $this->lang->line('Gender'); ?></option>
      <?php foreach ($generos as $genero): ?>
              <option value="<?php echo $genero['id_genero']; ?>"><?php echo $genero['genero']; ?></option>
      <?php endforeach; ?>
      </select>
    </div>

  <div class="form-floating mb-4">
    <input type="date" name="data" id="data" class="form-control" required 
    min="<?php $data = new DateTime('now'); $data->modify('-108 years'); echo $data->format('Y-m-d');?>"
    max="<?php $data = new DateTime('now'); $data->modify('-18 years'); echo $data->format('Y-m-d');?>">
    <label for="data"><?php echo $this->lang->line('BirthDate'); ?></label>
  </div>  
                  
  <label onclick="getLocation()" class="form-check-label">
  <input type="checkbox" class="form-check-input" name="localizacao" id="localizacao" value="Habilitado">
  <?php echo $this->lang->line('Location'); ?>
  </label><br>

  <input type="hidden" name="latitude" id="latitude" value="0">
  <input type="hidden" name="longitude" id="longitude" value="0">

  <input type="submit" id="submit" class="btn btn-primary btn-block mb-4" name="submit" value="<?php echo $this->lang->line('Title_reg'); ?>">
  </form>
</main>