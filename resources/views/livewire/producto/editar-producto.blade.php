<div>
    <form wire:submit.prevent='editarProducto' method="post">
        @csrf
        <div class="row align-items-center justify-content-start">
            <div class="form-group col-md-8">
                <label for="categoriaProducto">Categoría del producto</label>
                <select class="form-control" name="categoriaProducto" wire:model=''>
                    <option disabled>Seleccione una categoría</option>
                    @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-2">
            <div class="form-group col-md-6">
                <label for="codigoProducto">Código</label>
                <input type="text" class="form-control" name="codigoProducto" wire:model='codigo'>
            </div>
            <div class="form-group col-md-6">
                <label for="nombreProducto">Nombre del producto</label>
                <input type="text" class="form-control" name="nombreProducto" wire:model='nombre'>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="valorCompra">Valor de Producto</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                    </div>
                    <input type="number" class="form-control" min="1" step="any" name="valorCompra" wire:model='valorcompra'>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="valorVenta">Valor de Venta</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-dollar-sign"></i>
                        </span>
                    </div>
                    <input type="number" class="form-control" min="1" step="any" name="valorVenta" wire:model='valorventa'>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="stockInventario">Cantidad en Inventario</label>
                <input type="number" class="form-control" min="1" name="stockInventario" wire:model='stock'>
            </div>
            <div class="form-group col-md-6">
                <label for="proveedorProducto">Proveedor</label>
                <select class="form-control" name="proveedorProducto" wire:model='proveedor'>
                    <option disabled>Seleccione un proveedor</option>
                    @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->nombre }}</option>
                    @endforeach
                </select>
                <br>
                <a href="{{ route('proveedor.create') }}">
                    <button type="button" class="btn btn-block btn-sm bg-navy">
                        Crear Proveedor
                    </button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-block btn-sm bg-navy">
                    Guardar
                </button>
            </div>
        </div>
    </form>
</div>