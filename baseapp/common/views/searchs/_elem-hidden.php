<input class="form-control" type="hidden" id="<?php $id = isset($elem['id']) ? $elem['id'] : $elem['field'] . '_field'; echo $id; ?>" name="<?= $elem['field']; ?>" value="<?= $elem['value']; ?>" />
