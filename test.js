import { loadSupabase } from './supabase/client/client.js'

async function run() {
  const supabase = await loadSupabase()

  const { data, error } = await supabase
    .from('test')
    .select('id, content')

  console.log("data", data)
  console.log("error", error)
}

run()
