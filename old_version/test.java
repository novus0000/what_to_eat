int num = 0;
        Queue<Integer> q = new LinkedList<>();
        Arrays.sort(A);


        for(int i=0; i<A.length; i++)
        {
            q.offer(A[i]);
        }


        while(!q.isEmpty())
        {
            num = q.poll();
            if(num == q.peek() || num == q.peek()+1)
            {
                num =q.poll();
            }
            else
            {
                num+=1;
                break;
            }
        }
        if(q.isEmpty())num+=1;

        return num;