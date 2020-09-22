<template>

  <div class="modal fade bd-example-modal-lg"tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="width: 100% !important;" >
      <div class="modal-content">



      <form action="./api/subscriber" method="post" style="padding: 6.5rem;">

        <!-- Add New Menu-->
        <div class="row no-gutters">
          <div class="col-12">
          <label for="">Add Subscription:</label>
            <input class="form-control" v-model="subscriber" type="email" name="subscriber" placeholder="Add Subscription Email">
          </div>
        </div>

         <div class="row no-gutters">

         <div class="col-md-12">
              <button type="submit" class="btn btn-info waves-effect waves-light" @click.prevent="formSubmit()">Send Data</button>
         </div>



  <!-- col-8 -->
  </div>

  </form>


      </div>
    </div>
  </div>


</template>

<script>
    export default {
        name: "formSubmit",

        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return {
            subscriber: '',
          }
        },
        method:{
          formSubmit(){
            // axiox.post('./api/subscriber',{
            //   subscriber: this.subscriber,
            // });
            // console.log();
            alert('sadsad');
          },

        }
    }
</script>
