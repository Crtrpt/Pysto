import Head from 'next/head'
import Layout from '../../components/innerLayout'
import { ViewGridIcon,ViewListIcon,ClockIcon,SearchIcon,ChevronDownIcon, UserGroupIcon } from '@heroicons/react/solid'
export default function Device({
  displayMode,list
}) {
  return (
    <div className="">
      <Head>
        <title>Pysto-产品详情</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className="flex flex-col">
      产品详情
      </main>
    </div>
  )
}

export async function getStaticProps(context) {
  return {
    props: {
      displayMode:1,
      list:[
      
      ]
    }, // will be passed to the page component as props
  }
}

export async function getStaticPaths() {
  return {
    paths: [
      // String variant:
      '/product/first-post',
      // Object variant:
      { params: { slug: 'second-post' } },
    ],
    fallback: true,
  }
}

Device.getLayout = function getLayout(page) {
  return (
    <Layout>
      {page}
    </Layout>
  )
}

