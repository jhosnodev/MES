      <div class="modal-dialog modal-lg" role="document">
              
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="scrollmodalLabel">Crear Contacto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="">
                <input type="radio">
              </form>
              <a href="#myModal2" class="au-btn au-btn-icon au-btn--green au-btn--small text-right" id="modal-trigger-item" data-toggle="modal">
            <i class="zmdi zmdi-plus"></i>Agregar Elemento
        </a >
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        
      </div>





<div class="modal" id="myModal2" data-backdrop="static">
      <div class="modal-dialog modal-sm" role="document">
              
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="scrollmodalLabel">Crear Ítems</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                ¡Hola, Jhosno! Este es tu modal sobre un modal, ¡buen trabajo! 
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary">Guardar</button>
            </div>
          </div>
        
      </div>
</div>
@section('js')
<script>
$('#modal-trigger-item').on('click', function (event) {
          var button = $(event.relatedTarget); // Button that triggered the modal


          $.ajax({
            url: '{{url('item/create')}}',
            method:'GET',
            data:{},
            success:function(data)
          {
            $('#myModal2').html(data).modal('show');
             
            $('#close').on('click', function (event) { $('.evento').html(''); });
          },
          error:function(data){
            console.log(data);
          }
      });
        });
$('#close').click(function(){
    $('modal').modal('hide');
})
</script>

@endsection