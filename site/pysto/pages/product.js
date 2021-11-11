import Head from 'next/head'
import Layout from '../components/innerLayout'
import ProductListView  from './productListView'
import ProductGridView  from './productGridView'
import { ViewListIcon,SearchIcon,CollectionIcon } from '@heroicons/react/solid'
export default function Product({
  displayMode,list
}) {

  var view=displayMode==0?<ProductGridView list={list} />:<ProductListView  list={list}/>
  return (
    <div className="">
      <Head>
        <title>Pysto-产品</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <main className="flex flex-col">
          <div className="product_query py-1  border-b border-gray-300 px-1 flex">
            <div className="flex-grow flex items-center">
                <div>
                  <div className="border-2  hover:border-gray-700 rounded flex">
                    <input placeholder="搜索" className="p-1 text-sm outline-none"></input>
                    <SearchIcon className="w-4  text-gray-700 mr-2"></SearchIcon>
                  </div>
                </div>
            </div>
            <div className="flex items-center ">
              <ViewListIcon className="h-4  text-gray-900 px-2"></ViewListIcon>
              {/* <UserGroupIcon className="h-4  text-gray-900 px-2"></UserGroupIcon> */}
            </div>
          </div>
          {view}
      </main>

   
    </div>
  )
}

export async function getStaticProps(context) {
  return {
    props: {
      displayMode:1,
      list:[
        {name:"烟感",product_name:"CCSMOKE",model_count:9,device_count:100,id:1},
        {name:"燃气",product_name:"CCSMOKE",model_count:9,device_count:100,id:2},
        {name:"手报",product_name:"CCSMOKE",model_count:9,device_count:100,id:3},
      ]
    }, // will be passed to the page component as props
  }
}

Product.getLayout = function getLayout(page) {
  return (
    <Layout>
      {page}
    </Layout>
  )
}

