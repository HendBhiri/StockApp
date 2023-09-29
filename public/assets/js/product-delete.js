$(document).ready(function () {
        $(".delete-product").click(function () {
            if (confirm("Are you sure you want to delete this product?")) {
                var productId = $(this).data("product-id");
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('products.delete', ['product' => '__productId__']) }}".replace('__productId__', productId),
                    data: {
                        _token: "{{ csrf_token() }}",
                        _method: "DELETE",
                    },
                    success: function (data) {
                        // Handle success (e.g., remove the product row from the table)
                        $(this).closest("tr").remove();
                    },
                    error: function (data) {
                        // Handle error
                        alert("Failed to delete the product.");
                    },
                    success: function (data) {
                        // Handle success (e.g., remove the product row from the table)
                        console.log('Success:', data);
                        $(this).closest("tr").remove();
                    },
                    error: function (data) {
                        // Handle error
                        console.error('Error:', data);
                        alert("Failed to delete the product.");
                    },
                    
                });
            }
        });

        var deleteUrl = "{{ route('products.delete', ['product' => '__productId__']) }}".replace('__productId__', productId);
        console.log(deleteUrl);
});
