<form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <div class="input-group">
       	<input class="form-control" type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="Ex: contato...">
        <div class="input-group-append">
            <button class="btn btn-cor-3 text-light" type="submit">Buscar</button>
        </div>
    </div>
</form>