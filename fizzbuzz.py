for i in range(1,101):
    ans = ''
    if i % 3 == 0 or i % 5 == 0:
        if i % 3 == 0:
            ans += 'Fizz'
        if i % 5 == 0:
            ans += 'Buzz'
        print ans
    else:
        print i
