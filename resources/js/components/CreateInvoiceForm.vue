<template>
    <div>

        <h3>Invoice form</h3>
        <h4>Name: {{name}}</h4>

        <div> asdfsa</div>
        <vue-form :state="formstate" @submit.prevent="onSubmit">
            <div>
                <validate tag="label">
                    <span>Name *</span>
                    <input v-model="invoice.name" required name="name" />

                    <field-messages name="name" show="$submitted">
                        <div></div>
                        <div slot="required">Name is a required field</div>
                    </field-messages>
                </validate>
            </div>
            <div>
                <validate tag="label">
                    <span>Email</span>
                    <input v-model="invoice.email" name="email" type="email" required />

                    <field-messages name="email">
                        <div slot="required">Email is a required field</div>
                        <div slot="email">Email is not valid</div>
                    </field-messages>
                </validate>
            </div>
            <button type="submit">Submit</button>
        </vue-form>
    </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('form mounted');
        },
        data: function () {
            return {
                name: 'dupa',
                formstate: {},
                invoice: {
                    name: '',
                    email: 'invalid-email'
                }
            }
        },
        methods: {
            onSubmit: function () {
                if(this.formstate.$invalid) {
                    // alert user and exit early
                    return;
                }
                // otherwise submit form
            }
        }
    }
</script>