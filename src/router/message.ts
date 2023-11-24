const message = [
    {
        path:'',
        component:()=>import('@/layouts/MainLayout.vue'),

        children:[
            {
                path:'/messager',
                name:'page.message',
                component:()=>import('@/pages/message/Message.vue')
            }
        ]
    }
];

export default message;