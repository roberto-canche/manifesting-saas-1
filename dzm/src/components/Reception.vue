<template>
  <div class="content-wrapper">{{info}}

    <div class="content-wrapper">
         <header class="content-header">
        <h1>Reception</h1>
    
        </header>
        
        
            <section class="content"> 
                <input type="text" value="" placeholder="Find a client" class="form-control">
                
                <form action="" class="form-group">
                <fieldset>
                    
                <legend>Customer Details</legend>
                    <label for="full Name">Name: <input type="text" class="form-control"> </label>
                    <label for="dob">DOB: <input type="date" class="form-control"> </label>
                    <label for="weight">Weight: <input size="3" type="number" class="form-control"> </label>
                </fieldset>
                <fieldset>
                    <label for="type_ID">ID Type: <input type="text" class="form-control"></label>
                    <label for="ID_number">ID number: <input type="number" class="form-control"></label>
                </fieldset>
                <input type="submit" value="save" class="form-control">
                </form>
                        
                        <a href="#">Get Waiver</a>
            </section> 
    </div>
  </div>
    
</template>
<script>
//import axios from 'axios'

export default {
  name: "Reception",
  data () {
    return {

      info : null

    }
  },
  mounted () {


       // axios.post('https://user-api.simplybook.me/login', {"jsonrpc":"2.0","method":"getToken","params":["dzmanagement","99677be6a106d92ffc78a637c28bc6d80a63d782964512997b994325d971281c"],"id":1} )
       //           .then(response => (this.info = response))  

  }

};
</script>