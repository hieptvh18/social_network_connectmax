const message = [
    {
        path:'',
        meta:{
            title:'Message'
        },
        component:()=>import('@/layouts/MainLayout.vue'),
        
        children:[
            {
                name:'page.message',
                path:'/messager',
                component:()=>import('@/pages/message/Message.vue'),

                children:[
                    // {
                    //     name:'page.messager.default',
                    //     path:'/',
                    //     component:()=>import('@/components/message/ChatViewDefault.vue')
                    // },
                    {
                        name:'page.messager.detail',
                        path:':username',
                        component:()=>import('@/components/message/ChatView.vue')
                    }
                ]
            }
        ]
    }
];

export default message;