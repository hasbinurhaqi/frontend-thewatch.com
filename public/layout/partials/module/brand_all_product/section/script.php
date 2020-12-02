<script>
var currentCategory = '';
var currentAction = '';

var items = [];
	
            
    items.push({
        "id": "4389",
        "name": "Iconic Link 36 RG White",
        "price": "3550000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 1,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4383",
        "name": "Iconic Link 36 S White",
        "price": "3550000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 2,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4388",
        "name": "Iconic Link 28 S Black",
        "price": "3050000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 3,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4387",
        "name": "Iconic Link 28 S White",
        "price": "3050000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 4,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4385",
        "name": "Iconic Link 32 S White",
        "price": "3050000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 5,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4386",
        "name": "Iconic Link 32 S Black",
        "price": "3050000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 6,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4401",
        "name": "Classic Bracelet Satin White RG Medium",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 7,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4403",
        "name": "Classic Bracelet Satin White RG Small",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 8,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4402",
        "name": "Classic Bracelet Satin White S Medium",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 9,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4405",
        "name": "Classic Bracelet Dusty Rose RG Medium",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 10,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4404",
        "name": "Classic Bracelet Satin White S Small",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 11,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4406",
        "name": "Classic Bracelet Dusty Rose RG Small",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 12,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4407",
        "name": "Classic Bracelet Desert Sand RG Medium",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 13,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4408",
        "name": "Classic Bracelet Desert Sand RG Small",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 14,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4409",
        "name": "Classic Slim Bracelet Satin White RG Medium",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 15,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4410",
        "name": "Classic Slim Bracelet Satin White RG Small",
        "price": "1150000",
        "brand": "Daniel Wellington",
        "category": "jewelry",
        "position": 16,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4384",
        "name": "Iconic Link 36 S Black",
        "price": "3550000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 17,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4390",
        "name": "Iconic Link 36 RG Black",
        "price": "3550000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 18,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4393",
        "name": "Iconic Link 28 RG White",
        "price": "3050000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 19,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

        
    items.push({
        "id": "4391",
        "name": "Iconic Link 32 RG White",
        "price": "3050000",
        "brand": "Daniel Wellington",
        "category": "watches",
        "position": 20,
        "list": currentCategory + ' - ' + 'Daniel Wellington'
    })

            
    dataLayer.push({
        "event" : "productImpressions",
        "ecommerce": {
            "currencyCode": "IDR",
            "impressions": items
        }
    });

    function filter_show(type){
        $('.'+type+'-show').css('display', 'none');
        $('#'+type).show("slide", {direction: "up"}, 500);
        $('.'+type+'-hide').css('display', 'block');
    }
    function filter_hide(type){
        $('.'+type+'-hide').css('display', 'none');
        $('#'+type).show("slide", {direction: "down"}, 500);
        $('#'+type).css('display', 'none');
        $('.'+type+'-show').css('display', 'block');
    }
</script>