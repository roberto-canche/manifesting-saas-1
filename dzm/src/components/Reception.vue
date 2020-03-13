<template>

    <div class="content-wrapper">
    
        <header class="content-header">
        <h1>Reception</h1>
    {{ info }}
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

</template>