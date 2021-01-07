<x-app-layout>
<div class="col-md-6 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Basic Modal</h4>
        </div>
        <div class="card-body">
            <p>
            Toggle a modal via JavaScript by clicking the button above.
            You can use modal to add dialogs to your site for lightboxes, user
            notifications, or completely custom content.
            </p>
            <!-- Button trigger for extra large -->
            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#xlarge">
                Extra Large Modal
            </button>

            <!--Extra Large Modal -->
            <div class="modal fade text-left w-100" id="xlarge" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel16" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel16">Extra Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
                </div>
                <div class="modal-body">
                Cake cupcake sugar plum. Sesame snaps pudding cupcake candy canes icing cheesecake. Sweet roll
                pudding lollipop apple pie gummies dragée. Chocolate bar cookie caramels I love lollipop ice
                cream tiramisu lollipop sweet.
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Accept</span>
                </button>
                </div>
            </div>
            </div>
        </div>
            
        </div>
    </div>

    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">BorderLess Modal</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <p>
                Toggle a Boderless via JavaScript by clicking the button above. Use <code>.modal-borderless</code>
                with <code>.modal</code>for BorderLess modal.
                </p>
                <!-- Button trigger for BorderLess Modal -->
                <button type="button" class="btn btn-outline-primary block" data-toggle="modal" data-target="#border-less">
                Launch Modal
                </button>

                <!--BorderLess Modal Modal -->
                <div class="modal fade text-left modal-borderless" id="border-less" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Border-Less</h5>
                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>
                        Bonbon caramels muffin. Chocolate bar oat cake cookie pastry dragée pastry. Carrot cake
                        chocolate tootsie roll chocolate bar candy canes biscuit.
                        Gummies bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll. Toffee sugar
                        plum sugar plum jelly-o jujubes bonbon dessert carrot cake. Cookie dessert tart muffin topping
                        donut icing fruitcake. Sweet roll cotton candy dragée danish Candy canes chocolate bar cookie.
                        Gingerbread apple pie oat cake. Carrot cake fruitcake bear claw. Pastry gummi bears
                        marshmallow jelly-o.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary" data-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-primary ml-1" data-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
</div>  
</x-app-layout>