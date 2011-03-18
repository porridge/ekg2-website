#include <stdio.h>
#include <stdlib.h>
#include <wchar.h>
#include <locale.h>

#define CHAR_T wchar_t
wchar_t *foo(const char *str) {
	int rlen = strlen(str);
	wchar_t *temp = malloc((rlen + 1) * sizeof(CHAR_T));       /* new str->str */

	int cur = 0;
	int i = 0;

	mbtowc(NULL, NULL, 0);  /* reset */

	while (cur < rlen) {
		wchar_t znak;
		int len = mbtowc(&znak, &(str[cur]), rlen-cur);

		if (!len)  /* NUL, just in case */
			break;

		if (len > 0) {
			temp[i]     = znak;

		} else {
			/* here mbtowc() returns -1 */

			/*              debug("[%s:%d] mbtowc() failed ?! (%d, %s) (%d)\n", __FILE__, __LINE__, errno, strerror(errno), i); */

			len     = 1;        /* always move forward */
			temp[i]     = '?';
		}

		cur += len;
		i++;
	}

	fprintf(stderr, "%d %d\n", i, rlen);

	/* resize str->attr && str->str to match newlen. [I think we could use `i` instead of `i+1` but just in case] */
	return realloc(temp, (i+1) * sizeof(CHAR_T));
}

int main() {
	setlocale(LC_ALL, "");

	printf("%d\n", mbtowc(NULL, "", 0));
	printf("%d\n", mbtowc(NULL, "", 1));

	printf("%ls\n", foo("test"));

}

