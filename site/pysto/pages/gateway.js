import Head from 'next/head'
import Layout from '../components/innerLayout'

export default function Device() {
  return (
    <div className="flex flex-col items-center justify-center min-h-screen py-2">
      <Head>
        <title>Pysto-网关</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>

      <main className="">
          <div>
            网关列表
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

