const message = [
    {
        name:'page.message',
        path:'',
        meta:{
            title:'Message'
        },
        component:()=>import('@/layouts/MainLayout.vue'),

        children:[
            {
                path:'/messager',
                component:()=>import('@/pages/message/Message.vue')
            }
        ]
    }
];

export default message;