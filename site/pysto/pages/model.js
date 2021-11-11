import Head from 'next/head'
import Layout from '../components/innerLayout'

export default function Device() {
  return (
    <div className="">
      <Head>
        <title>Pysto-型号</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className="">
          <div>
            产品型号列表
          </div>
      </main>

   
    </div>
  )
}

Device.getLayout = function getLayout(page) {
  return (
    <Layout>
      {page}
    </Layout>
  )
}

